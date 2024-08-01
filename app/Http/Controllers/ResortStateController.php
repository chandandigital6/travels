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

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'image.*' => 'nullable|image',
            'resort_id' => 'nullable|exists:resorts,id',
        ]);

        $resortState = new ResortState();
        $resortState->title = $validatedData['title'];

        $resortState->resort_id = $validatedData['resort_id'];

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/resortState');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            // Convert the array of image paths to a string
            $resortState->image = implode(',', $imagePaths);
        }

        $resortState->save();
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
