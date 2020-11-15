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
                <table class="table table-striped">
                <thead>
                
                <tr>
                    <th scope="col">Viesbutis</th>
                    <th scope="col">Įvertinimas balais(0/10)</th>
                    <th scope="col">Komentaras</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                    <td>Nuostabuoji pilis</td>
                    <td>8</td>
                    <td>Nieko gero, bet sueina</td>
                    <td><a style="color: inherit;" href="/editReview">Redaguoti įvertinimą</a></td>
                    <td><a style="color: inherit;" href="/usersReviews" onclick="myFunction()">Šalinti įvertinimą</a></td>
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