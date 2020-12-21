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
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                
                        <div class="p-6">
                        <div class="p-6 right-0">
                            <div class="pabel-heading">
                                <h2 class="text-center">Kambario redagavimo forma</h2>
                            </div>
                            <div class="panel-body">
                            <form action="edit/{{ $room['id'] }}" method="POST">
                                @csrf

                                <div class="col-md-3">
                                Viešbučio id:<br>
                                    <input type="number" name="hid" value="{{ $room['hotel_id'] }}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Kambario numeris:<br>
                                    <input type="number" name="num" value="{{ $room['roomnumber'] }}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Aukštas:<br>
                                    <input type="number" name="floor" value="{{ $room['floor'] }}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Vietų skaičius:<br>
                                    <input type="number" name="max" value="{{ $room['maxclient'] }}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Privilegijos:<br>
                                    <input type="text" name="perks" value="{{ $room['perks'] }}">
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