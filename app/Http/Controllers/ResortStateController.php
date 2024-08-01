<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResortStateRequest;
use App\Models\Resort;
use App\Models\ResortState;
use Illuminate\Http\Request;

class ResortStateController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $resortState = ResortState::query();

        if (!empty($keyword)) {
            $resortState->where('title', 'like', "%$keyword%");
        }
        $resortStateData = $resortState->paginate(5);

        return view('resortState.index',compact('resortStateData'));
    }

    public function create(){
        $resorts = Resort::all();
        return view('resortState.create',compact('resorts'));
    }

    public function store(ResortStateRequest $request){
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/chose');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        ResortState::create($validatedData);
        return redirect()->route('resortState.index')->with('success', 'ResortState  created successfully.');
    }

    public function edit(ResortState $resortState){
        $resorts = Resort::all();
        return view('resortState.edit',compact('resortState','resorts'));
    }

    public function update(ResortState $resortState, ResortStateRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/resortState');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Update the ResortState model instance with the validated data
        $resortState->update($validatedData);

        return redirect()->route('resortState.index')->with('success', 'ResortState item successfully updated.');
    }


    public function delete(ResortState $resortState){
        $resortState->delete();
        return redirect()->route('resortState.index')->with('error','Successfully  resortState items deleted');

    }
    public function duplicate(ResortState $resortState){
        $productDuplicate=$resortState->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
