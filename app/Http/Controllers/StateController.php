<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateRequest;
use App\Models\Destination;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $state = State::query();

        if (!empty($keyword)) {
            $state->where('title', 'like', "%$keyword%");
        }
        $stateData = $state->paginate(5);

        return view('state.index',compact('stateData'));
    }

    public function create(){
        $destinations = Destination::all();
        return view('state.create',compact('destinations'));
    }

    public function store(StateRequest $request){
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'banner',];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/chose');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        State::create($validatedData);
        return redirect()->route('state.index')->with('success', 'State  created successfully.');
    }

    public function edit(State $state){
        $destinations = Destination::all();
        return view('state.edit',compact('state','destinations'));
    }

    public function update(State $state, StateRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'banner'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/state');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Update the State model instance with the validated data
        $state->update($validatedData);

        return redirect()->route('state.index')->with('success', 'State item successfully updated.');
    }


    public function delete(State $state){
        $state->delete();
        return redirect()->route('state.index')->with('error','Successfully  state items deleted');

    }
    public function duplicate(State $state){
        $productDuplicate=$state->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
