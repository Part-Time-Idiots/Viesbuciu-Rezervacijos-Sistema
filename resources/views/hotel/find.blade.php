@extends('layouts.app')

@section('content')
<div class="container">
    <div style="color:black;font-size:30px;">
        Ieškoti viešbučių
    </div>  
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 right-0">
                <div class="pabel-heading">
                    <h2 class="text-center">Paieška</h2>
                </div>
                <div class="panel-body">
                <form action="search" method="POST">
                    @csrf
                    <div class="col-md-3">
                    Ieškoti pagal:<br>
                        <input type="text" name="searchtype" list="types">

                        <datalist id="types">
                        <option value="Miestas">
                        <option value="Šalis">
                        </datalist>
                        <br>
                    </div>
                    <div class="col-md-3">
                        Terminas:<br>
                        <input type="text" name="searchterm">
                        <br>
                    </div>
                    <p>
                    <div class="col-md-3">
                        <button class="btn btn-primary rounded" type="submit">Ieškoti</button>
                    </div> 
                    </p>  
                </form> 
                </div>   
            </div>
        </div>
    </div>
    <p></p>
    <div class="grid grid-cols-1 md:grid-cols-2">
            <table>
            <?php
                for ($x = 1; $x <= 3; $x++):?>
                <tr>
                    <div class="p-6">
                
                    <?php
                        echo $x." Viešbučio informacija";
                    ?>
                        <a href="{{ url('/roominformation') }}" class="text-sm text-gray-700 underline">Pasirinkti viešbutį</a>
                    </div>
                </tr>
            <?php endfor; ?>
            </table>
        </div>   
    </div>         
</div>
@endsection