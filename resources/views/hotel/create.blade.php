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
                                <h2 class="text-center">Viešbučio registracijos forma</h2>
                            </div>
                            <div class="panel-body">
                            <form action="search" method="POST">
                                @csrf
                                
                                <div class="col-md-3">
                                Pavadinimas:<br>
                                    <input type="text" name="pavadinimas">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Aprašymas:<br>
                                    <input type="text" name="aprašymas" size="50">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Svetainė:<br>
                                    <input type="text" name="svetainė">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Susisiekimas:<br>
                                    <input type="tel" name="susisiekimas">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Ivertinimas:<br>
                                    <input type="number" name="įvertinimas">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Priema gyvūnus:<br>
                                    <input type="checkbox" name="priema gyvūnus">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Amžiaus apribojimas:<br>
                                    <input type="number" name="amžiaus apribojimas">
                                    <br><br>
                                </div>
                                
                                <div class="col-md-3">
                                    <button class="btn btn-primary rounded" type="submit">Užregistruoti</button>
                                </div>   
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
@endsection