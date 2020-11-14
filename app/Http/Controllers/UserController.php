<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit()
    {

    }

    public function update()
    {

    }

    public function profile($id)
    {
        $user = User::find($id);
        if($user) {
            return view('user.profile')->withUser($user);
        } else {
            return redirect()->back();
        }
    }

    public function passwordEdit()
    {

    }

    public function passwordUpdate()
    {

    }
}