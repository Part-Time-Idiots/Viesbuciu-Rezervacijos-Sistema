@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align: center;" class="card">
                <div style="font-size:200%;" class="card-header"> {{$hotel[0]->name}} viešbučio įvertinimai:</div>
                <p><a style="color: inherit;" href="/addReview?id={{$id}}">Įvertinti viešbutį</a></p>

                @isset($message)
                <p> {{$message}} </p>
                @endisset
                
                @if(isset($reviews) && count($reviews) > 0)
                <table class="table table-striped">
                
                <thead>
                
                <tr>
                    <th scope="col">Vertintojo vardas</th>
                    <th scope="col">Įvertinimas balais(0/10)</th>
                    <th scope="col">Komentaras</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($reviews as $review)
                    <tr>
                    <td>{{$review->name}}</td>
                    <td>{{$review->rating}}</td>
                    <td>{{$review->clientcomment}} </td>
                    <td><a style="color: inherit;" href="/commentReply">Atsakyti į komentarą</a></td>
                    </tr>
                @endforeach    
                </tbody>

                </table>
                @else
                <p> Šiuo metu viešbutis įvertinimų neturi</p>
                
                @endif

                
					
				</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection