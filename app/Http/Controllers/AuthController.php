<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerForm(Request $request)
    {
        dd($request->all());
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginForm(Request $request)
    {
        dd($request->all());
    }
}
