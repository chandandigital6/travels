<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $seos = Seo::where('page', 'testimonial')->get();
        return view('front_pages.register',compact('seos'));
    }

    public function register(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // if($request->name=='chandan' && $request->password=='12345678'){
        //     return redirect()->route('login')->with('success','you are registerd');
        // }else{
        //     return redirect()->back()->with('error','password or name not match');
        // }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);




        // Flash success message to the session
        session()->flash('success', 'You have successfully registered! Please log in.');

        return redirect()->route('login');
    }
}
