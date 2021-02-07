<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage()
    {       
        return view('user.login');
    }

    public function signupPage()
    {
        
        return view('user.signup');
    }
}
