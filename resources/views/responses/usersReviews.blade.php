@extends('layouts.app')

@section('content')
<script>
function myFunction() {
  confirm("Ar tikrai norite pašalinti įvertinimą?");
}


</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align: center;" class="card">
                <div style="font-size:200%;" class="card-header">Jusu ivertinimai</div>
                @isset($reviews)
                <table class="table table-striped">
                <thead>
                
                <tr>
                    <th scope="col">Viesbutis</th>
                    <th scope="col">Įvertinimas balais(0/10)</th>
                    <th scope="col">Komentaras</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($reviews as $review)
                    <tr>
                    <td> {{$review->name}} </td>
                    <td>{{$review->usersRating}} </td>
                    <td>{{$review->clientcomment}} </td>
                    <td>
                    <form action="deletereview" method="post" onsubmit="return confirm('Ar tikrai norite pašalinti įvertinimą?');">
                                @csrf
                                <input type="hidden" name="reservationid" value="{{$review->reviewsId}}">
                                <input type="submit" class="submitButton" value="Pašalinti">
                            </form> </td>
                            <td>
                    <form action="editreview" method="post">
                                @csrf
                                <input type="hidden" name="reservationid" value="{{$review->reviewsId}}">
                                <input type="submit" class="submitButton" value="Redaguoti">
                            </form> </td>    
                    </tr>
                @endforeach    
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