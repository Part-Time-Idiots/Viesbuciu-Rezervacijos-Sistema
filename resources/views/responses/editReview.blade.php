@extends('layouts.app')

@section('content')
<script>

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Viešbučio įvertinimo redagavimas</div>

                <div class="card-body">
                @isset($reviews)
                    <form action="updatereview" method="post">
                        @csrf
                        <h2>Viešbutis: {{$reviews[0]->name}}  </h2>

                        <div class="form-group row">
                            <label for="balai" class="col-md-4 col-form-label text-md-right">Balai</label>

                            <div class="col-md-6">
                                <select name="ivertinimas">
                                <option value="" disabled selected>Pasirinkite</option>
                                <!-- <option name="i" value="i">{$i}</option> -->
                                <?php 

                                for($i=1; $i<=10; $i++)
                                {
                                    $selected = "";
                                    if ( $reviews[0]->rating == $i)
                                    {
                                        $selected = "selected";
                                    }
                                    echo "<option name=\"$i\" value=\"$i\"".$selected.">{$i}</option>";
                                }
                                ?>
                                </select>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Komentaras</label>

                            <div class="col-md-6">
                                <textarea style="width: 140%;" name='comment'>{{$reviews[0]->clientcomment}}</textarea>

                                
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <input type="hidden" name="reservationid" value="{{$reviews[0]->reviewsID}}">
                            <input type="submit"  value="Redaguoti">
                        </div>
                    </form>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
