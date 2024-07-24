<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $destination = Destination::query();

        if (!empty($keyword)) {
            $destination->where('title', 'like', "%$keyword%");
        }
        $destinationData = $destination->paginate(5);

        return view('destination.index',compact('destinationData'));
    }

    public function create(){
        return view('destination.create');
    }

    public function store(Request $request){
//        dd($request);
            $request->validate([
                'name'=>'required'
            ]);
        $destination=Destination::create($request->all());
//        $image = $request->file('image')->store('public/destination');
//
//        $destination->image = str_replace('public/', '', $image);
//        $destination->save();
        return redirect()->route('destination.index')->with('success', 'Destination  created successfully.');
    }

    public function edit(Destination $destination){

        return view('destination.edit',compact('destination'));
    }

    public function update(Destination $destination , Request $request){
        $destinationData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/destination');
//            $destinationData['image'] = str_replace('public/', '', $imagePath);
//        }

        $destination->update($destinationData);

        return redirect()->route('destination.index')->with('success', 'destination item successfully updated');
    }


    public function delete(Destination $destination){
        $destination->delete();
        return redirect()->route('destination.index')->with('error','Successfully  destination items deleted');

    }
    public function duplicate(Destination $destination){
        $productDuplicate=$destination->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
