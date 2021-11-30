<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectPath());
        }
    }

    public function showProfile(){
        return view('profile');
    }

    public function updateProfile(){
        return view('updateprofile');
    }

    public function redirectPath()
    {
        // Logic that determines where to send the user
        if (Auth::user()->type == 'admin') {
            return '/admin';
        }

        return '/dashboard';
    }
}
