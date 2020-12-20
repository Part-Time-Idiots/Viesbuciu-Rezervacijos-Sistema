@extends('layouts.app')

@section('content')
<div class="container">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="ml-12">
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                        <div class="card-header">Kliento rezervacijos</div>
                    </div>
                </div>
                @isset($deletemessage)
                <?php echo $deletemessage; $deletemessage = "";?>
                @endisset
                <div class="card-body">
                
                    <div class="grid grid-cols-1 md:grid-cols-2">
                    @isset($reservations)
                        <center><table border = "1">  
                        <tr>
                        <td>Viešbutis</td>
                        <td>Pradžia</td>
                        <td>Pabaiga</td>
                        <td>Statusas</td>
                        <td>Redagavimas</td>
                        <td>Atšaukimas</td>
                        </tr>
                       
                        @foreach ($reservations as $reservation)
                        <tr>
                        <td>{{ $reservation->hotel }}</td>
                        <td>{{ $reservation->reservationstart }}</td>
                        <td>{{ $reservation->reservationend}}</td>
                        <td>{{ $reservation->status}}</td>
                        <td> 
                            <form action="editreservation" method="post">
                                @csrf
                                <input type="hidden" name="reservationid" value="{{$reservation->idr}}">
                                <input type="submit" value="Redaguoti">
                            </form>
                        </td>
                        <td> 
                            <form action="deletereservation" method="post">
                                @csrf
                                <input type="hidden" name="reservationid" value="{{$reservation->idr}}">
                                <input type="submit" value="Atšaukti">
                            </form>
                        </td>
                        </tr>
                        @endforeach
                        
                        </table>
                        </center>
                    @endisset
                        <!--<table>
                        <?php
                            for ($x = 1; $x <= 3; $x++):?>
                            <tr>
                                <div class="p-6">
                            
                                <?php
                                    echo $x." Rezervacijos informacija";
                                ?>
                            
                                    <p><a href="{{ url('/editreservation') }}" class="text-sm text-gray-700 underline">Redaguoti rezervaciją</a>
                                    <a href="{{ url('/clientreservations') }}" class="text-sm text-gray-700 underline">Atšaukti rezervaciją</a></p></p>
                                </div>
                            </tr>
                        <?php endfor; ?>
                        </table>-->
                    </div>
                
                </div>
            </div>
        </div>   
    </div>
@endsection