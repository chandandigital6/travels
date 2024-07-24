<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChooseRequest;
use App\Models\ChoseUs;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $chose = ChoseUs::query();

        if (!empty($keyword)) {
            $chose->where('title', 'like', "%$keyword%");
        }
        $choseData = $chose->paginate(5);

        return view('chose.index',compact('choseData'));
    }

    public function create(){
        return view('chose.create');
    }

    public function store(ChooseRequest $request){
//        dd($request);
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'f_1_image', 'f_2_image', 'f_3_image', 'f_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/chose');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        ChoseUs::create($validatedData);

        return redirect()->route('chose.index')->with('success', 'ChoseUs  created successfully.');
    }

    public function edit(ChoseUs $chose){

        return view('chose.edit',compact('chose'));
    }

    public function update(ChoseUs $chose , ChooseRequest $request){
        $choseData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/chose');
            $choseData['image'] = str_replace('public/', '', $imagePath);
        }

        $chose->update($choseData);

        return redirect()->route('chose.index')->with('success', 'chose item successfully updated');
    }


    public function delete(ChoseUs $chose){
        $chose->delete();
        return redirect()->route('chose.index')->with('error','Successfully  chose items deleted');

    }
    public function duplicate(ChoseUs $chose){
        $productDuplicate=$chose->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
