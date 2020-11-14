<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user_main()
    {
        return view('user'); 
    }
    public function user_profile()
    {
        return view('userprofile');
    }
}