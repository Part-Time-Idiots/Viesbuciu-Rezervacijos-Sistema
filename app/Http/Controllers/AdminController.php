<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');
    }
    
    public function index() 
    {
        return view('admin.index');
    }

    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        //dd($request);
        $user = User::find(Auth::user()->id);
        if($user) {
            $validate = null;
            if(Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:2',
                    'email' => 'required|email|unique:users'
                ]);
            }
            
            if($validate) {
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->save();
                $request->session()->flash('success', 'Pakeitimai buvo sėkmingai išsaugoti');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
            
        } else {
            return redirect()->back();
        }
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