@extends('layouts.app')

@section('content')
<div class="container">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="card-body">
                <div class="ml-12">
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                    Redaguoti pasirinktą rezervaciją
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                    @isset($message)
                    <?php echo $message; $message = "";?>
                    @endisset
                        <div class="p-6">
                        <?php
                            echo " Rezervacijos informacija";
                        ?> @foreach ($reservations as $reservation)
                            <form action="updatereservation" method="POST">
                                @csrf

                                <div class="col-md-3">
                                Rezervacijos pradžia:<br>
                                    <input type="date" min="2020-01-01" max="2030-01-01" placeholder="2020-01-01" name="reservationstart" value="{{$reservation->reservationstart}}">
                                    <br>
                                </div>
                                
                                <div class="col-md-3">
                                Rezervacijos pabaiga:<br>
                                    <input type="date" min="2020-01-01" max="2031-01-01" placeholder="2020-01-14" name="reservationend" value="{{$reservation->reservationend}}">
                                    <br>
                                </div>
                                <input type="hidden" name="reservationid" value="{{$reservation->id}}">
                                <input type="hidden" name="roomid" value="{{$reservation->room_id}}">
                                <input type="hidden" name="userid" value="{{$reservation->user_id}}">
                                <div class="col-md-3">
                                Suaugusiųjų skaičius:<br>
                                    <input type="number" min="1" max="2" placeholder="1" name="adultcount" value="{{$reservation->adultcount}}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Vaikų skaičius:<br>
                                    <input type="number" min="0" max="2" placeholder="0" name="childcount" value="{{$reservation->childcount}}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Pageidavimai:<br>
                                    <input type="text" name="preferences" placeholder="Nėra" value="{{$reservation->preferences}}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Įskaičiuoti pusryčiai:<br>
                                    <input type="checkbox" name="breakfast">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Vieta mašinai:<br>
                                    <input type="checkbox" name="carplace" >
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Išanksto apmokėta:<br>
                                    <input type="checkbox" name="prepayment">
                                    <br><br>
                                </div>
                                
                                <div class="col-md-3">
                                    <button class="btn btn-primary rounded" type="submit">Redaguoti</button>
                                </div>   
                            </form> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection