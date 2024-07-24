<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceHeaderRequest;
use App\Models\Service;
use App\Models\ServiceHeader;
use Illuminate\Http\Request;

class ServiceHeaderController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceHeader = ServiceHeader::query();

        if (!empty($keyword)) {
            $serviceHeader->where('title', 'like', "%$keyword%");
        }
        $serviceHeaderData = $serviceHeader->paginate(5);

        return view('serviceHeader.index',compact('serviceHeaderData'));
    }

    public function create(){
        $services=Service::all();
        return view('serviceHeader.create',compact('services'));
    }

    public function store(ServiceHeaderRequest $request){
//        dd($request);
        $serviceHeader=ServiceHeader::create($request->all());
//        $image = $request->file('image')->store('public/serviceHeader');
//
//        $serviceHeader->image = str_replace('public/', '', $image);
//        $serviceHeader->save();
        return redirect()->route('serviceHeader.index')->with('success', 'ServiceHeader  created successfully.');
    }

    public function edit(ServiceHeader $serviceHeader){
        $services=Service::all();
        return view('serviceHeader.edit',compact('serviceHeader','services'));
    }

    public function update(ServiceHeader $serviceHeader , ServiceHeaderRequest $request){
        $serviceHeaderData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceHeader');
//            $serviceHeaderData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceHeader->update($serviceHeaderData);

        return redirect()->route('serviceHeader.index')->with('success', 'serviceHeader item successfully updated');
    }


    public function delete(ServiceHeader $serviceHeader){
        $serviceHeader->delete();
        return redirect()->route('serviceHeader.index')->with('error','Successfully  serviceHeader items deleted');

    }
    public function duplicate(ServiceHeader $serviceHeader){
        $productDuplicate=$serviceHeader->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
