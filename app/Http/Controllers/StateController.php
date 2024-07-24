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

        // Create the state entry
        $state = State::create($validatedData);

        // Check if an image file was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/state');
            $state->image = str_replace('public/', '', $image);
            $state->save();
        }
        return redirect()->route('state.index')->with('success', 'State  created successfully.');
    }

    public function edit(State $state){
        $destinations = Destination::all();
        return view('state.edit',compact('state','destinations'));
    }

    public function update(State $state , StateRequest $request){
        $stateData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/state');
            $stateData['image'] = str_replace('public/', '', $imagePath);
        }

        $state->update($stateData);

        return redirect()->route('state.index')->with('success', 'state item successfully updated');
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
