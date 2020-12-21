@extends('layouts.app')

@section('content')
<script>

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Viešbučio įvertinimo forma</div>
                
                <div class="card-body">
                @isset($str)
                <p>{{$str}}</p>
                @endisset
                    <form action="addReview" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="balai" class="col-md-4 col-form-label text-md-right">Balai</label>

                            <div class="col-md-6">
                                <select name="ivertinimas">
                                <option value="" disabled selected>Pasirinkite</option>
                                <!-- <option name="i" value="i">{$i}</option> -->
                                <?php 

                                for($i=1; $i<=10; $i++)
                                {
                                    echo "<option name=\"$i\" value=\"$i\">{$i}</option>";
                                }
                                ?>
                                </select>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Komentaras</label>

                            <div class="col-md-6">
                                <textarea style="width: 140%;" name='comment'></textarea>

                                
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" value="issaugoti">
                            </div>
                        </div>
                    </form>
                </div>
                @isset($id)
                <p>id:   {{$id}}</p>
                @endisset
                @isset($ivertis)
                <p>ivertis:   {{$ivertis}} </p>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection
