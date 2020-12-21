<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|administrator|superadministrator');
    }
    
    public function index() 
    {
        return view('user.index');
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
                $user->surname = $request['surname'];
                $user->email = $request['email'];
                $user->birthday = $request['birthday'];
                $user->personal_code = $request['personal_code'];
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

    public function deleteUser(Request $request)
    {
        $user = User::find(Auth::user()->id);
        //DB::delete('delete from users where id = ?',[Auth::user()->id]);
        Auth::logout();
        $user->delete();
        return view('index');
        //return Redirect::route('index')->with('global', 'Your account has been deleted!');
    }

    public function reservations()
    {
        return view('user.reservations');
    }
}