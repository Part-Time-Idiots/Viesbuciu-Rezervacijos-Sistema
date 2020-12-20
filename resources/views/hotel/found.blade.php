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
            <center>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                            Viešbučių sąrašas
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <table border="3px solid black">
                            <tr>
                                    <tr>
                                        <td>Pavadinimas</td>
                                        <td>Aprašymas</td>
                                        <td>Puslapis</td>
                                        <td>Susisiekimas</td>
                                        <td>Įvertinimas</td>
                                        <td>Leidžiami gyvunai</td>
                                        <td>Amžius nuo</td>
                                        <td>Adresas</td>
                                    </tr>
                            </tr>
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <tr>
                                    <td>{{ $hotel->name }}</td>
                                    <td>{{ $hotel->description }}</td>
                                    <td>{{ $hotel->web }}</td>
                                    <td>{{ $hotel->communication}}</td>
                                    <td>{{ $hotel->rating}}</td>
                                    @if($hotel['animals'] == 1)
                                        <td>Taip</td>
                                    @endif
                                    @if($hotel['animals'] == 0)
                                        <td>Ne</td>
                                    @endif
                                    <td>{{ $hotel->agerestriction}}</td>
                                    @foreach ($addresses as $address)
                                        @if($address['id'] == $hotel->address_id)
                                            <td>{{ $address->city }}, {{ $address->street }} {{ $address->number }}, {{ $address->country }}</td>
                                        @endif
                                    @endforeach
                                    </tr>
                                </tr>
                            @endforeach                           
                        </table>
                    </div>
                </div>
            </center>
        </div>   
@endsection