<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Auth;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() 
    {
        $hotels = Hotel::all();
        return view('hotel.hotels',['hotels'=>$hotels]);
    }

    public function view($id)
    {
        $hotel = Hotel::find($id);
        return view('hotel.view',['hotel'=>$hotel]);
    }

    public function creationForm()
    {
        return view('hotel.create');
    }

    public function create(Request $req)
    {
        $hotel = new Hotel;

        $hotel->name = $req->pav;
        $hotel->description = $req->desc;
        $hotel->web = $req->web;
        $hotel->communication = $req->cont;

        if ($req->animals == "on") {
            $hotel->animals = 1;
        }
        else 
        {
            $hotel->animals = 0;
        }

        $hotel->agerestriction = $req->age;

        $hotel->save();
        return view('hotel.confirmation');
    }

    public function edit($id)
    {
        
    }

    public function askConfirm($id)
    {
        return view('hotel.confirm',['id'=>$id]);
    }

    public function confirmCancel()
    {
        return view('hotel.confirmationCancel');
    }

    public function remove($id)
    {
        Hotel::where('id', $id)->delete();
        return view('hotel.confirmation');
    }
}
