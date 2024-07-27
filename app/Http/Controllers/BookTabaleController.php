<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookTableRequest;
use App\Models\BookTabale;
use Illuminate\Http\Request;

class BookTabaleController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sort_by = $request->input('sort_by', 'created_at'); // Default sort column
        $sort_order = $request->input('sort_order', 'desc'); // Default sort order

        $bookTable = BookTabale::query();

        if (!empty($keyword)) {
            $bookTable->where('title', 'like', "%$keyword%");
        }

        $bookTable->orderBy($sort_by, $sort_order);

        $bookTableData = $bookTable->paginate(5);

        return view('bookTable.index', compact('bookTableData', 'sort_by', 'sort_order'));
    }


    //    public function create(){
    //        return view('bookTable.create');
    //    }

    public function store(BookTableRequest $request)
    {
//         dd($request->all());

        $bookTable = BookTabale::create($request->all());



        if ($bookTable) {


//            Mail::to($bookTable->email)->send(new BookTabaleCreated($bookTable));

            // Send email to the admin
//            $adminEmail = 'mobilesmashrepair87@gmail.com';

//            Mail::to($adminEmail)->send(new AdminBookTabaleNotification($bookTable));
        }
        return redirect()->route('thanks')->with('success', 'BookTabale  created successfully.');
//                return redirect()->back()->with('success', 'BookTabale  created successfully.');
    }

    //    public function edit(BookTabale $bookTable){
    //
    //        return view('bookTable.edit',compact('bookTable'));
    //    }
    //
    //    public function update(BookTabale $bookTable , BookTableRe $request){
    //        $bookTableData = $request->all();
    //
    //        if ($request->hasFile('image')) {
    //            $imagePath = $request->file('image')->store('public/bookTable');
    //            $bookTableData['image'] = str_replace('public/', '', $imagePath);
    //        }
    //
    //        $bookTable->update($bookTableData);
    //
    //        return redirect()->route('bookTable.index')->with('success', 'bookTable item successfully updated');
    //    }

    //save image in database
//    public function image(Request $request)
//    {
//        if ($request->hasFile('file')) {
//            $imagePath = $request->file('file')->store('public/car_images');
//            $imagePath = str_replace('public/', '', $imagePath);
//            $image = BookTabaleImage::create([
//                'image' => $imagePath
//            ]);
//            return response()->json(['status' => true, 'message' => 'Success!', 'data' => $image]);
//        } else {
//            return response()->json(['status' => false, 'message' => 'Image is required!']);
//        }
//    }

    public function delete(BookTabale $bookTable)
    {
        $bookTable->delete();
        return redirect()->route('bookTable.index')->with('error', 'Successfully  bookTable items deleted');
    }
    public function duplicate(BookTabale $bookTable)
    {
        return view('bookTable.show', compact('bookTable'));
        //        $productDuplicate=$bookTable->replicate();
        //        $productDuplicate->save();
        //        return redirect()->back();
    }
}
