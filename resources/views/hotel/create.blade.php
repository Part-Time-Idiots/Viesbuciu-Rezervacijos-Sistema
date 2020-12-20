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
                            <form action="createhotel" method="POST">
                                @csrf
                                
                                <div class="col-md-3">
                                Pavadinimas:<br>
                                    <input type="text" id="pav" name="pav">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Aprašymas:<br>
                                    <input type="text" id="desc" name="desc" maxlength="500" size="200">
                                    <br>
                                </div>

                                <div class="col-md-3">
                                Svetainė:<br>
                                    <input type="text" id="web" name="web">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Susisiekimas:<br>
                                    <input type="tel" id="cont" name="cont">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Priema gyvūnus:<br>
                                    <input type="checkbox" id="animals" name="animals">
                                    <br><br>
                                </div>

                                <div class="col-md-3">
                                Amžiaus apribojimas:<br>
                                    <input type="number" id="age" name="age">
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