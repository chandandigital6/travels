<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateVideosRequest;
use App\Models\State;
use App\Models\StateVideo;
use Illuminate\Http\Request;

class StateVideosController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $stateVideo = StateVideo::query();

        if (!empty($keyword)) {
            $stateVideo->where('title', 'like', "%$keyword%");
        }
        $stateVideoData = $stateVideo->paginate(5);

        return view('stateVideo.index', compact('stateVideoData'));
    }

    public function create(){
       $states=State::all();
        return view('stateVideo.create',compact('states'));
    }

    public function store(StateVideosRequest $request){
//        dd($request->all());
        $stateVideo=StateVideo::create($request->all());
        if ($request->hasFile('image')) {
            // Store the image in the public/stateVideo directory
            $image = $request->file('image')->store('public/stateVideo');

            // Update the state video entry with the image path
            $stateVideo->image = str_replace('public/', '', $image);
            $stateVideo->save();
        }
        return redirect()->route('stateVideo.index')->with('success', 'StateVideo  created successfully.');
    }

    public function edit(StateVideo $stateVideo){
       $states=State::all();
        return view('stateVideo.edit',compact('stateVideo','states'));
    }

    public function update(StateVideo $stateVideo , StateVideosRequest $request){
        $stateVideoData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/stateVideo');
            $stateVideoData['image'] = str_replace('public/', '', $imagePath);
        }

        $stateVideo->update($stateVideoData);

        return redirect()->route('stateVideo.index')->with('success', 'stateVideo item successfully updated');
    }


    public function delete(StateVideo $stateVideo){
        $stateVideo->delete();
        return redirect()->route('stateVideo.index')->with('error','Successfully  stateVideo items deleted');

    }
    public function duplicate(StateVideo $stateVideo){
        $productDuplicate=$stateVideo->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
