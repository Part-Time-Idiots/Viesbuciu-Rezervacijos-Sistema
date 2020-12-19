@extends('layouts.app')

@section('content')
    <!--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif-->
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="ml-12">
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                    Kambario informacija
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm" style="color:black;font-size:15px;">
                    @isset($rooms)
                    @foreach ($rooms as $room)
                    Viešbutis: {{ $room->hotel }}<br> Aukštas: {{ $room->floor }}<br> Kambario privalumai: {{ $room->perks }}<br>
                    @endforeach
                    @endisset
                    @isset($message)
                    <?php echo $message; ?>
                    @endisset
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                
                        <div class="p-6">
                        <div class="p-6 right-0">
                            <div class="pabel-heading">
                                <h2 class="text-center">Rezervacijos forma</h2>
                            </div>
                            <div class="panel-body">
                            <form action="createrezervation" method="POST">
                                @csrf
                                
                                <!--<div class="col-md-3">
                                Pateikimo data:<br>
                                    <input type="date" min="2020-01-01" max="2021-01-01" placeholder="2020-01-01" name="rezervacijos pateikimo data">
                                    <br>
                                </div>-->

                                <div class="col-md-3">
                                Rezervacijos pradžia:<br>
                                    <input type="date" min="2020-01-01" max="2030-01-01" placeholder="2020-01-01" name="reservationstart">
                                    <br>
                                </div>
                                
                                <div class="col-md-3">
                                Rezervacijos pabaiga:<br>
                                    <input type="date" min="2020-01-01" max="2031-01-01" placeholder="2020-01-14" name="reservationend">
                                    <br>
                                </div>
                                @isset($rooms)
                                @foreach ($rooms as $room)
                                <input type="hidden" name="roomid" value="{{$room->id}}">
                                @endforeach
                                @endisset
                                <!--<div class="col-md-3">
                                Statusas:<br>
                                    <input type="text" name="statusas">
                                    <br><br>
                                </div>-->

                                <div class="col-md-3">
                                Suaugusiųjų skaičius:<br>
                                    <input type="number" min="1" max="2" placeholder="1" name="adultcount">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Vaikų skaičius:<br>
                                    <input type="number" min="0" max="2" placeholder="0" name="childcount">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Pageidavimai:<br>
                                    <input type="text" name="preferences" placeholder="Nėra">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Įskaičiuoti pusryčiai:<br>
                                    <input type="checkbox" name="breakfast">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Vieta mašinai:<br>
                                    <input type="checkbox" name="carplace">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Išanksto apmokėta:<br>
                                    <input type="checkbox" name="prepayment">
                                    <br><br>
                                </div>
                                
                                <div class="col-md-3">
                                    <button class="btn btn-primary rounded" type="submit">Patvirtinti</button>
                                </div>   
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
@endsection