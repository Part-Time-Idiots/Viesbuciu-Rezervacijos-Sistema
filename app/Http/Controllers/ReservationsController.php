<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class ReservationsController extends Controller
{
    public function search(Request $req){
        //print_r($req -> input());
        $search_town = $_POST['town'];
        //$search_from = $_POST['datefrom'];
        //$search_to = $_POST['dateto'];
        //print_r($search_town);
        //print_r($search_from);
        //print_r($search_to);

        $rooms = DB::select('select * from rooms INNER JOIN hotels ON `rooms`.`hotel_id`=`hotels`.`id` INNER JOIN `addresses` ON `hotels`.`address_id` = `addresses`.`id` where city = "'.$search_town.'"');
        //print_r($rooms);
        return view('reservations/findreservation',['rooms'=>$rooms]);
        //redirect()->back();
    }

    public function roomData(Request $req){
        $roomid = $_POST['roomid'];
        //print_r($req -> input());
        $rooms = DB::select('select * from rooms where id = "'.$roomid.'"');
        return view('reservations/roominformation',['rooms'=>$rooms]);
    }

    public function createreservation(Request $req){
        $reservationstart = $_POST['reservationstart'];
        $reservationend = $_POST['reservationend'];
        $adultcount = $_POST['adultcount'];
        $childcount = $_POST['childcount'];
        $preferences = $_POST['preferences'];
        if(isset($_POST['breakfast'])){
            $breakfast = "1";
        }else{
            $breakfast="0";
        }
        if(isset($_POST['carplace'])){
            $carplace = "1";
        }else{
            $carplace="0";
        }
        if(isset($_POST['prepayment'])){
            $prepayment = "1";
        }else{
            $prepayment = "0";
        }
        $user_id = "3";//User::find(Auth::user()->id);
        $room_id =$_POST['roomid'];
        $insert = DB::insert('insert into reservations (reservationsubmissiondate, reservationstart,reservationend,status, adultcount, childcount, breakfast, preferences, carplace, prepayment, user_id, room_id) values (NOW(), "'.$reservationstart.'","'.$reservationend.'","Rezervuota",'.$adultcount.','.$childcount.','.$breakfast.',"'.$preferences.'",'.$carplace.','.$prepayment.','.$user_id.','.$room_id.')');
        $message = "Kambarys sėkmingai rezervuotas";
        return view('reservations/roominformation',['message'=>$message]);
    } 
    public function updateReservation(Request $req){
        $reservationid = $_POST['reservationid'];
        $reservationstart = $_POST['reservationstart'];
        $reservationend = $_POST['reservationend'];
        $adultcount = $_POST['adultcount'];
        $childcount = $_POST['childcount'];
        $preferences = $_POST['preferences'];
        if(isset($_POST['breakfast'])){
            $breakfast = "1";
        }else{
            $breakfast="0";
        }
        if(isset($_POST['carplace'])){
            $carplace = "1";
        }else{
            $carplace="0";
        }
        if(isset($_POST['prepayment'])){
            $prepayment = "1";
        }else{
            $prepayment = "0";
        }
        $user_id =  $_POST['userid'];
        $room_id = $_POST['roomid'];
        $insert = DB::update('update reservations set reservationstart = "'.$reservationstart.'",reservationend = "'.$reservationend.'",status = "Rezervuota", adultcount = '.$adultcount.', childcount = '.$childcount.', breakfast ='.$breakfast.', preferences = "'.$preferences.'", carplace ='.$carplace.', prepayment = '.$prepayment.', user_id ='.$user_id.', room_id = '.$room_id.' where id = '.$reservationid.'');
        $message = "Rezervacija atnaujinta";
        $reservations = DB::select('select * from reservations where id = '.$reservationid.'');
        return view('reservations/editreservation',['reservations'=>$reservations,'message'=>$message]);
    } 
    public function editReservation(Request $req){
        //edit
        $reservationid = $_POST['reservationid'];
        
        $reservations = DB::select('select * from reservations where id = '.$reservationid.'');
        return view('reservations/editreservation',['reservations'=>$reservations]);
    }

    public function deleteReservation(Request $req){
        //delete 
        $reservationid = $_POST['reservationid'];
        DB::update('update reservations set status = "Atšaukta" where id = '.$reservationid.'');
        //DB::delete('delete from reservations where id = '.$reservationid.'');
        $deletemessage=" ";//Rezervacija atšaukta";
        $reservations = DB::select('select * from reservations where user_id = "3"');
        return view('reservations/clientreservations',['reservations'=>$reservations,'deletemessage'=>$deletemessage]);
    }


    public function findReservations(){

        $reservations = DB::select('select * from reservations where user_id = "3"');
        return view('reservations/clientreservations',['reservations'=>$reservations]);
    }
}
