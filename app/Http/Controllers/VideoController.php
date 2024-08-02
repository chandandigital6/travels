<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $video = Video::query();

        if (!empty($keyword)) {
            $video->where('title', 'like', "%$keyword%");
        }
        $videoData = $video->paginate(5);

        return view('video.index', compact('videoData'));
    }

    public function create(){

        return view('video.cre ate');
    }

    public function store(VideoRequest $request){
//        dd($request->all());
        $video=Video::create($request->all());
        if ($request->hasFile('image')) {
            // Store the image in the public/video directory
            $image = $request->file('image')->store('public/video');

            // Update the state video entry with the image path
            $video->image = str_replace('public/', '', $image);
            $video->save();
        }
        return redirect()->route('video.index')->with('success', 'Video  created successfully.');
    }

    public function edit(Video $video){

        return view('video.edit',compact('video'));
    }

    public function update(Video $video , VideoRequest $request){
        $videoData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/video');
            $videoData['image'] = str_replace('public/', '', $imagePath);
        }

        $video->update($videoData);

        return redirect()->route('video.index')->with('success', 'video item successfully updated');
    }


    public function delete(Video $video){
        $video->delete();
        return redirect()->route('video.index')->with('error','Successfully  video items deleted');

    }
    public function duplicate(Video $video){
        $productDuplicate=$video->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
