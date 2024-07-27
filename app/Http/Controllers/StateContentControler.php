<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateContentRequest;
use App\Models\State;
use App\Models\StateContent;
use Illuminate\Http\Request;

class StateContentControler extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $stateContent = StateContent::query();

        if (!empty($keyword)) {
            $stateContent->where('title', 'like', "%$keyword%");
        }
        $stateContentData = $stateContent->paginate(5);

        return view('stateContent.index',compact('stateContentData'));
    }

    public function create(){
        $states=State::all();
        return view('stateContent.create',compact('states'));
    }

    public function store(StateContentRequest $request){
//        dd($request);
        $stateContent=StateContent::create($request->all());
//        $image = $request->file('image')->store('public/stateContent');
//
//        $stateContent->image = str_replace('public/', '', $image);
//        $stateContent->save();
        return redirect()->route('stateContent.index')->with('success', 'StateContent  created successfully.');
    }

    public function edit(StateContent $stateContent){
        $states=State::all();
        return view('stateContent.edit',compact('stateContent','states'));
    }

    public function update(StateContent $stateContent , StateContentRequest $request){
        $stateContentData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/stateContent');
//            $stateContentData['image'] = str_replace('public/', '', $imagePath);
//        }

        $stateContent->update($stateContentData);

        return redirect()->route('stateContent.index')->with('success', 'stateContent item successfully updated');
    }


    public function delete(StateContent $stateContent){
        $stateContent->delete();
        return redirect()->route('stateContent.index')->with('error','Successfully  stateContent items deleted');

    }
    public function duplicate(StateContent $stateContent){
        $productDuplicate=$stateContent->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
