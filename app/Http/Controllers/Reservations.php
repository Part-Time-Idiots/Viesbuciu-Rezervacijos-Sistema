<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservations extends Controller
{
    //
    function search(Request $req){
        //print_r($req -> input());
        $search_town = $_POST['town'];
        $search_from = $_POST['datefrom'];
        $search_to = $_POST['dateto'];
        print_r($search_town);
        print_r($search_from);
        print_r($search_to);


        //redirect()->back();
    }
}
