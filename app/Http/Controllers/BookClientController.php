<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookClientRequest;
use App\Models\BookClient;
use Illuminate\Http\Request;

class BookClientController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sort_by = $request->input('sort_by', 'created_at'); // Default sort column
        $sort_order = $request->input('sort_order', 'desc'); // Default sort order

        $bookClient = BookClient::query();

        if (!empty($keyword)) {
            $bookClient->where('title', 'like', "%$keyword%");
        }

        $bookClient->orderBy($sort_by, $sort_order);

        $bookClientData = $bookClient->paginate(5);

        return view('bookClient.index', compact('bookClientData', 'sort_by', 'sort_order'));
    }



    public function store(BookClientRequest $request)
    {
//         dd($request->all());

        $bookClient = BookClient::create($request->all());



        if ($bookClient) {


//            Mail::to($bookClient->email)->send(new BookClientCreated($bookClient));

            // Send email to the admin
//            $adminEmail = 'mobilesmashrepair87@gmail.com';

//            Mail::to($adminEmail)->send(new AdminBookClientNotification($bookClient));
        }
        return redirect()->route('thanks')->with('success', 'BookClient  created successfully.');
//                return redirect()->back()->with('success', 'BookClient  created successfully.');
    }


    public function delete(BookClient $bookClient)
    {
        $bookClient->delete();
        return redirect()->route('bookClient.index')->with('error', 'Successfully  bookClient items deleted');
    }
    public function duplicate(BookClient $bookClient)
    {
        return view('bookClient.show', compact('bookClient'));
        //        $productDuplicate=$bookClient->replicate();
        //        $productDuplicate->save();
        //        return redirect()->back();
    }
}
