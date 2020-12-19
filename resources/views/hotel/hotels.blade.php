@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <!-- @if (Route::has('login'))
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
                         Viešbučių sąrašas
                    </div>
                </div>
                <div class="col-md-3">
                        <a href="{{ url('/createhotel') }}" class="btn btn-primary rounded" type="submit">Registruoti naują</a>
                </div><p></p>
                <div class="grid grid-cols-1 md:grid-cols-2">
                        <table border="3px solid black">
                        <tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Pavadinimas</td>
                                    <td>Aprašymas</td>
                                    <td>Vertinimas</td>
                                </tr>
                        </tr>
                        @foreach ($hotels as $hotel)
                            <tr>
                                <tr>
                                <td>{{ $hotel->id }}</td>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->description }}</td>
                                <td>{{ $hotel->rating}}</td>
                                <td><a href="{{ url('/viewhotel/'.$hotel->id.'/') }}" class="text-sm text-gray-700 underline">Pilna informacija</a></td>
                                <td><a href="{{ url('/edithotel') }}" class="text-sm text-gray-700 underline">Redaguoti</a></td>
                                <td><a href="{{ url('/removehotel') }}" class="text-sm text-gray-700 underline">Pašalinti</a></td>
                                </tr>
                            </tr>
                            @endforeach
                        </table>
                        
                </div>
            </div>
        </div>   
@endsection