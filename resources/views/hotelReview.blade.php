@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align: center;" class="card">
                <div style="font-size:200%;" class="card-header">Pasirinkto viešbučio įvertinimai:</div>
                <p><a style="color: inherit;" href="/addReview">Įvertinti viešbutį</a></p>
                <table class="table table-striped">
                <thead>
                
                <tr>
                    <th scope="col">Vertintojo vardas</th>
                    <th scope="col">Įvertinimas balais(0/10)</th>
                    <th scope="col">Komentaras</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                    <td>Petras</td>
                    <td>8</td>
                    <td>Butu gerai bet yra kur tobulet, daugiau 8 negaliu duot sorry hebra</td>
                    <td><a style="color: inherit;" href="/commentReply">Atsakyti į komentarą</a></td>
                    </tr>
                    
                </tbody>

                </table>
						
				</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection