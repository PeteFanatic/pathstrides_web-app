<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Session;
use Illuminate\Support\Facades\Auth;
>>>>>>> maegan-login_screen

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function index()
    {
        return view('login');
    }
<<<<<<< HEAD
}
=======

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
            );

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials))
        {
            return redeirect()->intended('dashboard')
                     ->with('message', 'Signed In!');
        }

        return redirect('/login')->with('message', 'Username or password incorrect');
    }
}
>>>>>>> maegan-login_screen
