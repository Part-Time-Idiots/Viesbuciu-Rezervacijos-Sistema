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
                                <h2 class="text-center">Ataskaitos generavimas</h2>
                            </div>
                            <div class="panel-body">
                            <form action="createreport" method="POST">
                                @csrf
                                
                                <div class="col-md-3">
                                Viešbutis:<br>
                                    <input type="text" name="hotelid" list="hotels">
                                    <datalist id="hotels">
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">
                                        @endforeach
                                    </datalist>
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    Nuo:<br>
                                    <input type="date" name="datefrom">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                    Iki:<br>
                                    <input type="date" name="dateto">
                                    <br><br>
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Patvirtinti') }}
                                        </button>
                                    </div>
                                </div>  
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
@endsection