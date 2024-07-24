<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceBeforrequest;
use App\Models\Service;
use App\Models\ServiceBefore;
use Illuminate\Http\Request;

class ServiceBeforController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceBefore = ServiceBefore::query();

        if (!empty($keyword)) {
            $serviceBefore->where('title', 'like', "%$keyword%");
        }
        $serviceBeforeData = $serviceBefore->paginate(20);

        return view('serviceBefore.index',compact('serviceBeforeData'));
    }

    public function create(){
        $services=Service::all();
        return view('serviceBefore.create',compact('services'));
    }

    public function store(ServiceBeforrequest $request){
        // Validate and create the ServiceBefore record
        $validated = $request->validated();
        $serviceBefore = ServiceBefore::create($validated);

        // Handle image_before upload
        if ($request->hasFile('image_before')) {
            $imageBeforePath = $request->file('image_before')->store('public/serviceBefore');
            $serviceBefore->image_before = str_replace('public/', '', $imageBeforePath);
        }

        // Handle image_after upload
        if ($request->hasFile('image_after')) {
            $imageAfterPath = $request->file('image_after')->store('public/serviceBefore');
            $serviceBefore->image_after = str_replace('public/', '', $imageAfterPath);
        }

        // Save the ServiceBefore record with the updated image paths
        $serviceBefore->save();
        return redirect()->route('serviceBefore.index')->with('success', 'ServiceBefore  created successfully.');
    }

    public function edit(ServiceBefore $serviceBefore){
        $services=Service::all();
        return view('serviceBefore.edit',compact('serviceBefore','services'));
    }

    public function update(ServiceBefore $serviceBefore , ServiceBeforrequest $request){
        // Validate the request data
        $validated = $request->validated();

        // Update the ServiceBefore record with validated data
        $serviceBefore->update($validated);

        // Handle image_before upload
        if ($request->hasFile('image_before')) {
            $imageBeforePath = $request->file('image_before')->store('public/serviceBefore');
            $serviceBefore->image_before = str_replace('public/', '', $imageBeforePath);
        }

        // Handle image_after upload
        if ($request->hasFile('image_after')) {
            $imageAfterPath = $request->file('image_after')->store('public/serviceBefore');
            $serviceBefore->image_after = str_replace('public/', '', $imageAfterPath);
        }

        // Save the ServiceBefore record with the updated image paths
        $serviceBefore->save();

        return redirect()->route('serviceBefore.index')->with('success', 'serviceBefore item successfully updated');
    }


    public function delete(ServiceBefore $serviceBefore){
        $serviceBefore->delete();
        return redirect()->route('serviceBefore.index')->with('error','Successfully  serviceBefore items deleted');

    }
    public function duplicate(ServiceBefore $serviceBefore){
        $productDuplicate=$serviceBefore->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
