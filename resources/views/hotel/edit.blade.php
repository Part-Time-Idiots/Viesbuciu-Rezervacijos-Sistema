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
                                <h2 class="text-center">Viešbučio redagavimo forma</h2>
                            </div>
                            <div class="panel-body">
                            <form action="{{ $hotel['id'] }}/edit" method="POST">
                                @csrf
                                
                                <div class="col-md-3">
                                Pavadinimas:<br>
                                    <input type="text" name="pav" value="{{ $hotel['name'] }}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Aprašymas:<br>
                                    <input type="text" name="desc" maxlength="500" size="200" value="{{ $hotel['description'] }}">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Svetainė:<br>
                                    <input type="text" name="web" value="{{ $hotel['web'] }}">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Susisiekimas:<br>
                                    <input type="tel" name="cont" value="{{ $hotel['communication'] }}">
                                    <br><br>
                                </div>
                                
                                <div class="col-md-3">
                                Priema gyvūnus:<br>
                                    @if ($hotel['animals'] == 1)
                                    <input type="checkbox" name="animals" checked>
                                    <br><br>
                                    @endif
                                    @if ($hotel['animals'] == 0)
                                    <input type="checkbox" name="animals">
                                    <br><br>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                Amžiaus apribojimas:<br>
                                    <input type="number" name="age" value="{{ $hotel['agerestriction'] }}">
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