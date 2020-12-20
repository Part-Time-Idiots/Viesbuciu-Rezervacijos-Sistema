<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Report;
use App\Models\Address;
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


            if(count($hotels) > 0) return view('hotel.found',['hotels'=>$hotels, 'addresses'=>$addresses]);
            else return view('hotel.notfound');
        }
        else if($req->searchtype == "Šalis")
        {
            $addresses = Address::where('country', 'LIKE' ,'%'.$req->searchterm.'%')->get();
            $hotels = Hotel::whereIn('address_id', $addresses->pluck('id'))->get();;

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
        $report->text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nam libero justo laoreet sit amet cursus sit. Diam maecenas ultricies mi eget. Sed pulvinar proin gravida hendrerit lectus. Aliquam faucibus purus in massa tempor. Amet porttitor eget dolor morbi non. Integer vitae justo eget magna. Nunc congue nisi vitae suscipit. Sed viverra ipsum nunc aliquet bibendum. Nisl tincidunt eget nullam non. Tortor id aliquet lectus proin nibh. Pharetra convallis posuere morbi leo urna molestie at elementum.

        Vel facilisis volutpat est velit egestas dui. Mauris augue neque gravida in. Purus viverra accumsan in nisl. Eu non diam phasellus vestibulum lorem. Vitae turpis massa sed elementum tempus egestas. Aliquam sem et tortor consequat id porta nibh. Sed id semper risus in hendrerit gravida rutrum. Et netus et malesuada fames. Diam maecenas ultricies mi eget mauris pharetra. Sit amet massa vitae tortor. Sodales ut eu sem integer vitae justo eget magna fermentum. In hac habitasse platea dictumst vestibulum. Massa placerat duis ultricies lacus sed turpis. Orci ac auctor augue mauris augue neque gravida. Cursus euismod quis viverra nibh cras pulvinar mattis nunc sed.";
        $report->save();
        return view('report.confirmation');
    }

}
