<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceChooseRequest;
use App\Models\Service;
use App\Models\ServiceChoose;
use Illuminate\Http\Request;

class ServiceChooseController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceChoose = ServiceChoose::query();

        if (!empty($keyword)) {
            $serviceChoose->where('title', 'like', "%$keyword%");
        }
        $serviceChooseData = $serviceChoose->paginate(5);

        return view('serviceChoose.index',compact('serviceChooseData'));
    }

    public function create(){
        $services=Service::all();
        return view('serviceChoose.create',compact('services'));
    }

    public function store(ServiceChooseRequest $request){
//        dd($request);
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'f_1_image', 'f_2_image', 'f_3_image', 'f_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/serviceChoose');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        ServiceChoose::create($validatedData);

        return redirect()->route('serviceChoose.index')->with('success', 'ServiceChoose  created successfully.');
    }

    public function edit(ServiceChoose $serviceChoose){
        $services=Service::all();
        return view('serviceChoose.edit',compact('serviceChoose','services'));
    }

    public function update(ServiceChoose $serviceChoose , ServiceChooseRequest $request){

        $serviceChooseData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/serviceChoose');
            $serviceChooseData['image'] = str_replace('public/', '', $imagePath);
        }

        $serviceChoose->update($serviceChooseData);

        return redirect()->route('serviceChoose.index')->with('success', 'serviceChoose item successfully updated');
    }


    public function delete(ServiceChoose $serviceChoose){
        $serviceChoose->delete();
        return redirect()->route('serviceChoose.index')->with('error','Successfully  serviceChoose items deleted');

    }
    public function duplicate(ServiceChoose $serviceChoose){
        $productDuplicate=$serviceChoose->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
