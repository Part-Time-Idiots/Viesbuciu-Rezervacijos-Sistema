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
                            Ataskaitų sąrašas
                        </div>
                    </div>
                    <div class="col-md-3">
                            <a href="{{ url('/createreport') }}" class="btn btn-primary rounded" type="submit">Generuoti naują</a>
                    </div><p></p>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                            <table border="3px solid black">
                            <tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Viešbučio ID</td>
                                        <td>Data nuo</td>
                                        <td>Data iki</td>
                                    </tr>
                            </tr>
                            @foreach ($reports as $report)
                                <tr>
                                    <tr>
                                    <td>{{ $report->id }}</td>
                                    <td>{{ $report->hotel_id }}</td>
                                    <td>{{ $report->datefrom }}</td>
                                    <td>{{ $report->dateto}}</td>
                                    <td><a href="{{ url('/viewreport/'.$report->id.'/') }}" class="text-sm text-gray-700 underline">Peržiūrėti</a></td>
                                    </tr>
                                </tr>
                                @endforeach
                            </table>
                            
                    </div>
                </div>
            </center>
        </div>   
@endsection