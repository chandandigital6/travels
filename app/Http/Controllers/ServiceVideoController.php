<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceVideoRequest;
use App\Models\Service;
use App\Models\ServiceVideo;
use Illuminate\Http\Request;

class ServiceVideoController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceVideo = ServiceVideo::query();

        if (!empty($keyword)) {
            $serviceVideo->where('title', 'like', "%$keyword%");
        }
        $serviceVideoData = $serviceVideo->paginate(5);

        return view('serviceVideo.index',compact('serviceVideoData'));
    }

    public function create(){
        $services=Service::all();
        return view('serviceVideo.create',compact('services'));
    }

    public function store(ServiceVideoRequest $request){
//        dd($request->all());
        $serviceVideo=ServiceVideo::create($request->all());
//        $image = $request->file('image')->store('public/serviceVideo');
//
//        $serviceVideo->image = str_replace('public/', '', $image);
//        $serviceVideo->save();
        return redirect()->route('serviceVideo.index')->with('success', 'ServiceVideo  created successfully.');
    }

    public function edit(ServiceVideo $serviceVideo){
        $services=Service::all();
        return view('serviceVideo.edit',compact('serviceVideo','services'));
    }

    public function update(ServiceVideo $serviceVideo , ServiceVideoRequest $request){
        $serviceVideoData = $request->all();
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceVideo');
//            $serviceVideoData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceVideo->update($serviceVideoData);

        return redirect()->route('serviceVideo.index')->with('success', 'serviceVideo item successfully updated');
    }


    public function delete(ServiceVideo $serviceVideo){
        $serviceVideo->delete();
        return redirect()->route('serviceVideo.index')->with('error','Successfully  serviceVideo items deleted');

    }
    public function duplicate(ServiceVideo $serviceVideo){
        $productDuplicate=$serviceVideo->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
