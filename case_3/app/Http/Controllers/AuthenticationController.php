<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function login()
    {
        return view('landing.page.login');
    }

    public function storeLogin(Request $request)
    {
        $post = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // get request to variabel
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        
            if (Auth::attempt($post)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard')->with('success', 'success login');
            }
            return redirect()->back()->with('failed', 'email or password is wrong!');
    }
}
