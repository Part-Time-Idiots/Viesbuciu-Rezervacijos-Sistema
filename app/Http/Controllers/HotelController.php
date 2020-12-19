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

    public function edit()
    {
        
    }

    public function remove($id)
    {
        $hotel = Hotel::find($id);
        return view('hotel.remove',['hotel'=>$hotel]);
    }
}
