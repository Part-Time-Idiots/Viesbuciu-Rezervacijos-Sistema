<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReservationsController extends Controller
{
    //
    public function search(Request $req){
        //print_r($req -> input());
        $search_town = $_POST['town'];
        $search_from = $_POST['datefrom'];
        $search_to = $_POST['dateto'];
        //print_r($search_town);
        //print_r($search_from);
        //print_r($search_to);

        $rooms = DB::select('select * from rooms where hotel = "'.$search_town.'"');
        //print_r($rooms);
        return view('reservations/findreservation',['rooms'=>$rooms]);
        //redirect()->back();
    }
}
