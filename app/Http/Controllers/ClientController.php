<?php

namespace App\Http\Controllers;

use App\Models\ClientLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $logo = ClientLogo::query();

        if (!empty($keyword)) {
            $logo->where('title', 'like', "%$keyword%");
        }
        $logoData = $logo->paginate(5);

        return view('logo.index',compact('logoData'));
    }

    public function create(){
        return view('logo.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image.*' => 'nullable|image',
            'title' => 'required|string|max:255',
            'msg' => 'nullable',
        ]);

        $logo = new ClientLogo();
        $logo->title = $validatedData['title'];
        $logo->msg=$validatedData['msg'];
//        $logo->category_id = $validatedData['category_id'];

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/logo');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            // Convert the array of image paths to a string
            $logo->image = implode(',', $imagePaths);
        }

        $logo->save();

        return redirect()->route('logo.index')->with('success', 'logo created successfully.');
    }






    public function edit(ClientLogo $logo){

        return view('logo.edit',compact('logo'));
    }

    public function update(Request $request, $logo)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'image.*' => 'nullable|image',
            'title' => 'required|string|max:255',
            'msg' => 'nullable',
            // Add validation rules for other fields if needed
        ]);

        // Find the logo by its ID
        $logo = ClientLogo::findOrFail($logo);

        // Update the logo's title and message
        $logo->title = $validatedData['title'];
        $logo->msg = $validatedData['msg'];

        // Handle the image upload if there are new images
        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/logo');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }

            // If the logo already has images, merge the new ones with the existing ones
            if (is_string($logo->image) && !empty($logo->image)) {
                $existingImages = explode(',', $logo->image);
                $allImages = array_merge($existingImages, $imagePaths);
            } else {
                $allImages = $imagePaths;
            }

            // Convert the array of image paths to a string
            $logo->image = implode(',', $allImages);
        }

        // Save the updated logo
        $logo->save();

        // Redirect to the logo index page with a success message
        return redirect()->route('logo.index')->with('success', 'Logo updated successfully.');
    }

    public function delete(ClientLogo $logo){
        $logo->delete();
        return redirect()->route('logo.index')->with('error','Successfully  logo items deleted');

    }
    public function duplicate(ClientLogo $logo){
        $productDuplicate=$logo->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }

    public function removeImage(Request $request)
    {
        $imagePath = $request->input('image');

        // Get the current logo instance
        $logo = ClientLogo::find(1); // Replace with your logic to get the correct instance

        // Remove the image from the storage
        Storage::delete('public/' . $imagePath);

        // Update the image field in the database
        $images = explode(',', $logo->image);
        if(($key = array_search($imagePath, $images)) !== false) {
            unset($images[$key]);
        }
        $logo->image = implode(',', $images);
        $logo->save();

        return redirect()->back()->with('success', 'Image removed successfully.');
    }


}
