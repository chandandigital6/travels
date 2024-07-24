<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $packages = Packages::query();

        if (!empty($keyword)) {
            $packages->where('title', 'like', "%$keyword%");
        }
        $packagesData = $packages->paginate(5);

        return view('packages.index',compact('packagesData'));
    }

    public function create(){

        return view('packages.create');
    }

    public function store(PackageRequest $request){
//        dd($request);
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/packages');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        Packages::create($validatedData);

        return redirect()->route('packages.index')->with('success', 'Packages  created successfully.');
    }

    public function edit(Packages $packages){

        return view('packages.edit',compact('packages',));
    }

    public function update(Packages $packages , PackageRequest $request){

        $packagesData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/packages');
            $packagesData['image'] = str_replace('public/', '', $imagePath);
        }

        $packages->update($packagesData);

        return redirect()->route('packages.index')->with('success', 'packages item successfully updated');
    }


    public function delete(Packages $packages){
        $packages->delete();
        return redirect()->route('packages.index')->with('error','Successfully  packages items deleted');

    }
    public function duplicate(Packages $packages){
        $productDuplicate=$packages->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
