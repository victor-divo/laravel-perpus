<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
    }

    public function login()
    {
        return view('auth.login');
    }
}
