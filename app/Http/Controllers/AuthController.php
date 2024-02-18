<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // FOR LOGIN AUTHENTICATION

    public function login()
    {
        return view('login.loginpage');
    }

    public function signup()
    {
        return view('login.signup');
    }

}
