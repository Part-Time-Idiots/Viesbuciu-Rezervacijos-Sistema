<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Report;
use App\Models\Address;
use App\Models\Review;
use App\Models\Room;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HotelController extends Controller
{
    //HOTELS
    public function index() 
    {
        $hotels = Hotel::all();
        return view('hotel.hotels',['hotels'=>$hotels]);
    }

    public function view($id)
    {
        $hotel = Hotel::find($id);
        $rating = Review::Where('hotel_id', $hotel->id)->pluck('rating')->avg();
        if($rating != NULL) $hotel->rating = $rating; 
        else $hotel->rating = 0; 
        $hotel->save();
        
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
        $hotel->animals = $req->animals == "on" ? 1 : 0;
        $hotel->agerestriction = $req->age;
        $hotel->address_id = $req->address;

        $hotel->save();
        return view('hotel.confirmation');
    }

    public function editForm($id)
    {
        $hotel = Hotel::find($id);
        return view('hotel.edit',['hotel'=>$hotel, 'id'=>$id]);
    }

    public function edit($id, Request $req)
    {
        $hotel = Hotel::find($id);

        $hotel->name = $req->pav;
        $hotel->description = $req->desc;
        $hotel->web = $req->web;
        $hotel->communication = $req->cont;
        $hotel->animals = $req->animals == "on" ? 1 : 0;
        $hotel->agerestriction = $req->age;
        $hotel->address_id = $req->address;

        $hotel->save();

        return view('hotel.confirmation');
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

    public function find() 
    {
        return view('hotel.find');
    }
    
    public function found(Request $req) 
    {
        if($req->searchtype == "Miestas")
        {
            $addresses = Address::where('city', 'LIKE' ,'%'.$req->searchterm.'%')->get();
            $hotels = Hotel::whereIn('address_id', $addresses->pluck('id'))->get();

            foreach($hotels as $hotel)
            {
                $rating = Review::Where('hotel_id', $hotel->id)->pluck('rating')->avg();
                if($rating != NULL) $hotel->rating = $rating; 
                else $hotel->rating = 0; 
                $hotel->save();
            }

            if(count($hotels) > 0) return view('hotel.found',['hotels'=>$hotels, 'addresses'=>$addresses]);
            else return view('hotel.notfound');
        }
        else if($req->searchtype == "Šalis")
        {
            $addresses = Address::where('country', 'LIKE' ,'%'.$req->searchterm.'%')->get();
            $hotels = Hotel::whereIn('address_id', $addresses->pluck('id'))->get();

            foreach($hotels as $hotel)
            {
                $rating = Review::Where('hotel_id', $hotel->id)->pluck('rating')->avg();
                if($rating != NULL) $hotel->rating = $rating; 
                else $hotel->rating = 0; 
                $hotel->save();
            }

            if(count($hotels) > 0) return view('hotel.found',['hotels'=>$hotels, 'addresses'=>$addresses]);
            else return view('hotel.notfound');
        }
        else 
        {
            return view('hotel.notfound');
        }       
        
    }

    // REPORTS
    public function reportsIndex() 
    {
        $reports = Report::all();
        return view('report.reports',['reports'=>$reports]);
    }

    public function reportsView($id)
    {
        $report = Report::find($id);
        
        return view('report.view',['report'=>$report]);
    }
    
    public function reportForm()
    {
        $hotels = Hotel::all();
        return view('report.create',['hotels'=>$hotels]);
    }

    public function createReport(Request $req)
    {
        $report = new Report;
        $hotel = Hotel::find($req->hotelid);

        $report->createdate = Carbon::now();
        $report->datefrom = $req->datefrom;
        $report->dateto = $req->dateto;
        $report->hotel_id = $hotel->id;
        $report->text = "ATASKAITOS TEKSTAS";
        
        $report->save();
        return view('report.confirmation');
    }

    // ROOMS

    public function roomIndex() 
    {
        $rooms = Room::all();
        return view('room.rooms',['rooms'=>$rooms]);
    }

    public function viewRoom($id)
    {
        $room = Room::find($id);
        return view('room.view',['room'=>$room]);
    }

    public function creationRoomForm()
    {
        return view('room.create');
    }

    public function createRoom(Request $req)
    {
        $room = new Room;
        $hotel = Hotel::find($req->hid);
        if($hotel != NULL) $room->hotel = $hotel->name;
        else $room->hotel = "Viešbutis nerastas....";
        $room->roomnumber = $req->num;
        $room->floor = $req->floor;
        $room->maxclient = $req->max;
        if($room->perks != NULL) $room->perks = $req->perks;
        else $room->perks = "-";
        $room->hotel_id = $req->hid;

        $room->save();
        return view('room.confirmation');
    }

    public function editRoomForm($id)
    {
        $room = Room::find($id);
        return view('room.edit',['room'=>$room, 'id'=>$id]);
    }

    public function editRoom($id, Request $req)
    {
        $room = Room::find($id);

        $hotel = Hotel::find($req->hid);
        if($hotel != NULL) $room->hotel = $hotel->name;
        else $room->hotel = "Viešbutis nerastas....";
        $room->roomnumber = $req->num;
        $room->floor = $req->floor;
        $room->maxclient = $req->max;
        if($room->perks != NULL) $room->perks = $req->perks;
        else $room->perks = "-";
        $room->hotel_id = $req->hid;

        $room->save();

        return view('room.confirmation');
    }

    public function askConfirmRoom($id)
    {
        return view('room.confirm',['id'=>$id]);
    }

    public function confirmCancelRoom()
    {
        return view('room.confirmationCancel');
    }

    public function removeRoom($id)
    {
        Room::where('id', $id)->delete();
        return view('room.confirmation');
    }
}
