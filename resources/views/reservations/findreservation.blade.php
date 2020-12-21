@extends('layouts.app')

@section('content')
<div class="container">
            <!-- ggg -->
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="ml-12">
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                    <div class="card-header">Ieškoti kambarių</div>
                    </div>
                    
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="card-body">
                        <div class="p-6 right-0">
                            <div class="pabel-heading">
                                <h2 class="text-center">Paieška</h2>
                            </div>
                            <div class="panel-body">
                            <form action="search" method="POST">
                                @csrf
                                <div class="col-md-3">
                                Miestas:<br>
                                    <input type="text" name="town" placeholder="Miestas">
                                    <br>
                                </div>
                                <!--<div class="col-md-3">
                                    Nuo:<br>
                                    <input type="date" name="datefrom">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    Iki:<br>
                                    <input type="date" name="dateto">
                                    <br><br>
                                </div>-->
                                <div class="col-md-3">
                                <br>
                                    <button class="btn btn-primary rounded" type="submit">Ieškoti</button>
                                </div>   
                            </form> 
                            </div>   
                        </div>
                    </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2">
                        @isset($rooms)
                        <center><table border = "1">  
                         <tr>
                        <td>Viešbutis</td>
                        <td>Max. svečių kiekis</td>
                        </tr>
                       
                        @foreach ($rooms as $room)
                        <tr>
                        <td>{{ $room->hotel }}</td>
                        <td>{{ $room->maxclient}}</td>
                        <td> 
                            <form action="roominformation" method="post">
                                @csrf
                                <input type="hidden" name="roomid" value="{{$room->id}}">
                                <input type="submit" value="Išsami kambario informacija">
                            </form>
                        </td>
                        </tr>
                        @endforeach
                        
                        </table>
                        </center>
                        @endisset
                    </div>
            </div>
        </div>
    </div>
@endsection