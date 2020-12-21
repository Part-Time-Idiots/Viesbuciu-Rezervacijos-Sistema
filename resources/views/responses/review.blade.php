@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align: center;" class="card">
                <div style="font-size:200%;" class="card-header">Pasirinkite viešbutį, kurio įvertinimą norite peržiūrėti
                
                </div>
                <p><a style="color: inherit;" href="/usersReviews">Mano įvertinimai</a></p>
                @isset($hotels)
                <table class="table table-striped">
                <thead>
                
                <tr>
                    <th scope="col">Pavadinimas</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                    <td scope="row"><a style="color: inherit;" href="/hotelReview/{{$hotel->id}}">{{$hotel->name}}</a></td>
                    
                    
                    </tr>
                @endforeach
                    <!-- <tr>
                    <td scope="row"><a style="color: inherit;" href="/hotelReview">Nuostabioji pilis</a></td>
                    
                    </tr> -->
                
                </tbody>

                </table>
				@endisset		
				</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection