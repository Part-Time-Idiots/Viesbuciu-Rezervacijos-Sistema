<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservations extends Controller
{
    //
    function search(Request $req){
        print_r($req -> input());
        //redirect()->back();
    }
}
