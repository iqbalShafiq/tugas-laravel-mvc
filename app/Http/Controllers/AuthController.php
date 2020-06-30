<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome()
    {
        $first_name = request('first-name');
        $last_name = request('last-name');
        return view('welcome', compact('last_name', 'first_name'));
    }
}
