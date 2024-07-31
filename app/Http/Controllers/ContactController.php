<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sort_by = $request->input('sort_by', 'created_at'); // Default sort column
        $sort_order = $request->input('sort_order', 'desc'); // Default sort order

        $contact = Contact::query();

        if (!empty($keyword)) {
            $contact->where('title', 'like', "%$keyword%");
        }

        $contact->orderBy($sort_by, $sort_order);

        $contactData = $contact->paginate(5);

        return view('contact.index', compact('contactData', 'sort_by', 'sort_order'));
    }



    public function store(ContactRequest $request)
    {
//         dd($request->all());

        $contact = Contact::create($request->all());



        if ($contact) {


//            Mail::to($contact->email)->send(new ContactCreated($contact));

            // Send email to the admin
//            $adminEmail = 'mobilesmashrepair87@gmail.com';

//            Mail::to($adminEmail)->send(new AdminContactNotification($contact));
        }
        return redirect()->route('thanks')->with('success', 'Contact  created successfully.');
//                return redirect()->back()->with('success', 'Contact  created successfully.');
    }


    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('error', 'Successfully  contact items deleted');
    }
    public function duplicate(Contact $contact)
    {
        return view('contact.show', compact('contact'));
        //        $productDuplicate=$contact->replicate();
        //        $productDuplicate->save();
        //        return redirect()->back();
    }
}
