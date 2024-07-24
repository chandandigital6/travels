<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceGalleryRequest;
use App\Models\Service;
use App\Models\ServiceGallery;
use Illuminate\Http\Request;

class ServiceGalleryController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $gallery = ServiceGallery::query();

        if (!empty($keyword)) {
            $gallery->where('title', 'like', "%$keyword%");
        }
        $galleryData = $gallery->paginate(5);

        return view('gallery.index',compact('galleryData'));
    }

    public function create(){
        $services=Service::all();
        return view('gallery.create',compact('services'));
    }

    public function store(ServiceGalleryRequest $request)
    {


        $data = $request->validated();

        $gallery = new ServiceGallery;
        $gallery->title = $data['title'];
        $gallery->msg = $data['msg'];
        $gallery->service_id = $data['service_id'];

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/gallery');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            // Convert the array of image paths to a string
            $gallery->image = implode(',', $imagePaths);
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'gallery created successfully.');
    }






    public function edit(ServiceGallery $gallery){
        $services=Service::all();
        return view('gallery.edit',compact('gallery','services'));
    }

    public function update(ServiceGalleryRequest $request, $id)
    {
//        dd($request->all());
        $gallery = ServiceGallery::findOrFail($id);
        $data = $request->validated();

        $gallery->title = $data['title'];
        $gallery->msg = $data['msg'];
        $gallery->status = $data['status'];
        $gallery->service_id = $data['service_id'];

        if ($request->hasFile('image')) {
            // Delete old images
            $oldImages = explode(',', $gallery->image);
            foreach ($oldImages as $oldImage) {
                \Storage::delete('public/' . $oldImage);
            }

            // Store new images
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/gallery');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            $gallery->image = implode(',', $imagePaths);
        }

        $gallery->save();


        // Redirect to the gallery index page with a success message
        return redirect()->route('gallery.index')->with('success', 'Logo updated successfully.');
    }

    public function delete(ServiceGallery $gallery){
        $gallery->delete();
        return redirect()->route('gallery.index')->with('error','Successfully  gallery items deleted');

    }
    public function duplicate(ServiceGallery $gallery){
        $productDuplicate=$gallery->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
