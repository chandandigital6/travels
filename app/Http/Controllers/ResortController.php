<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $resort = Resort::query();

        if (!empty($keyword)) {
            $resort->where('title', 'like', "%$keyword%");
        }
        $resortData = $resort->paginate(5);

        return view('resort.index',compact('resortData'));
    }

    public function create(){
        return view('resort.create');
    }

    public function store(Request $request){
//        dd($request);
        $request->validate([
            'name'=>'required'
        ]);
        $resort=Resort::create($request->all());
//        $image = $request->file('image')->store('public/resort');
//
//        $resort->image = str_replace('public/', '', $image);
//        $resort->save();
        return redirect()->route('resort.index')->with('success', 'Resort  created successfully.');
    }

    public function edit(Resort $resort){

        return view('resort.edit',compact('resort'));
    }

    public function update(Resort $resort , Request $request){
        $resortData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/resort');
//            $resortData['image'] = str_replace('public/', '', $imagePath);
//        }

        $resort->update($resortData);

        return redirect()->route('resort.index')->with('success', 'resort item successfully updated');
    }


    public function delete(Resort $resort){
        $resort->delete();
        return redirect()->route('resort.index')->with('error','Successfully  resort items deleted');

    }
    public function duplicate(Resort $resort){
        $productDuplicate=$resort->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
