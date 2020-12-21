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
                <center>
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                    Pilna informacija apie viešbutį
                    </div>
                </center>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                
                        <div class="p-6">
                        <center>
                        <table border="3px solid black">
                            <tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Pavadinimas</td>
                                        <td>Aprašymas</td>
                                        <td>Tinklapis</td>
                                        <td>Susisiekimas</td>
                                        <td>Įvertinimas</td>
                                        <td>Leidžiami gyvunai</td>
                                        <td>Amžiaus ribojimas</td>
                                        <td>Adresas</td>
                                        <td>User(?)</td>
                                        <td>Įrašas sukurtas</td>
                                        <td>Įrašas atnaujintas</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $hotel->id }}</td>
                                        <td>{{ $hotel->name }}</td>
                                        <td>{{ $hotel->description }}</td>
                                        <td>{{ $hotel->web }}</td>
                                        <td>{{ $hotel->communication }}</td>
                                        <td>{{ $hotel->rating}}</td>
                                        <td>{{ $hotel->animals }}</td>
                                        <td>{{ $hotel->agerestriction }}</td>
                                        <td>{{ $hotel->address_id }}</td>
                                        <td>{{ $hotel->user_id }}</td>
                                        <td>{{ $hotel->created_at }}</td>
                                        <td>{{ $hotel->updated_at }}</td>
                                    </tr>
                            </tr>
                        </table>
                        </center>
                            <!--<div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection