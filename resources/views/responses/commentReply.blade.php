@extends('layouts.app')

@section('content')
<script>

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size:200%;" class="card-header">Komentaro atsakymas</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="balai" class="col-md-4 col-form-label text-md-right">Viešbučio komentaras: </label>

                            <div class="col-md-6">
                                Kažkoks komentaras
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Atsakymas į komentarą:</label>

                            <div class="col-md-6">
                                <textarea style="width: 140%;" name='comment'></textarea>

                                
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    Išsaugoti
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
