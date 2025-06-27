<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function showRegisterForm()
    {
        return view('users/authregister');
    }
    
     public function showLoginForm()
    {
        return view('users/authlogin');
    }
    public function coba()
    {
        return view('components/aside');
    }
}
