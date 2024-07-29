<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(Request $request){
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = auth()->user();
        $user->update($request->except('password') + ['password' => $request->password]);
        return back()->with('success', 'Your profile has been updated successfully');
    }
}
