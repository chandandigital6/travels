<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceTitleRequest;
use App\Models\ServiceTitle;
use Illuminate\Http\Request;

class ServiceTitleController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceTitle = ServiceTitle::query();

        if (!empty($keyword)) {
            $serviceTitle->where('serviceTitle', 'like', "%$keyword%");
        }
        $serviceTitleData = $serviceTitle->paginate(5);

        return view('serviceTitle.index',compact('serviceTitleData'));
    }

    public function create(){
        return view('serviceTitle.create');
    }

    public function store(ServiceTitleRequest $request){
//        dd($request);
        $serviceTitle=ServiceTitle::create($request->all());
//        $image = $request->file('image')->store('public/serviceTitle');
//
//        $serviceTitle->image = str_replace('public/', '', $image);
//        $serviceTitle->save();
        return redirect()->route('serviceTitle.index')->with('success', 'ServiceTitle  created successfully.');
    }

    public function edit(ServiceTitle $serviceTitle){

        return view('serviceTitle.edit',compact('serviceTitle'));
    }

    public function update(ServiceTitle $serviceTitle , ServiceTitleRequest $request){
        $serviceTitleData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceTitle');
//            $serviceTitleData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceTitle->update($serviceTitleData);

        return redirect()->route('serviceTitle.index')->with('success', 'serviceTitle item successfully updated');
    }


    public function delete(ServiceTitle $serviceTitle){
        $serviceTitle->delete();
        return redirect()->route('serviceTitle.index')->with('error','Successfully  serviceTitle items deleted');

    }
    public function duplicate(ServiceTitle $serviceTitle){
        $productDuplicate=$serviceTitle->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
