@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
			<div class="card mb-3">
				<div class="card-header">{{ __('Paskyros duomenys') }}</div>
					<div class="card-body">
					<div class="row">
						<div class="col-3">El. paštas: </div>
						<div class="col">{{ $user['email'] }}</div>
						<div class="w-100"></div>
						<div class="col-3">Vardas:</div>
						<div class="col">{{ $user['name'] }}</div>
						<div class="w-100"></div>
						<div class="col-3">Pavardė:</div>
						<div class="col">{{ $user['surname'] }}</div>
						<div class="w-100"></div>
						<div class="col-3">Gimtadienis:</div>
						<div class="col">{{ $user['birthday'] }}</div>
						<div class="w-100"></div>
						<div class="col-3">Asmens kodas:</div>
						<div class="col">{{ $user['personal_code'] }}</div>
						<div class="w-100"></div>
					</div>
                </div>
                
              
         	</div>

			{{--<div class="card mb-3">
				<div class="card-header">{{ __('Paskyros el. pašto patvirtinimas') }}</div>
				<div class="card-body">
					<p class="card-text">Išsiųsti el. pašto patvirtinimo laišką</p>
				<a href="#" class="btn btn-info">Išsiųsti</a>
				</div>
            
        	</div>--}}
			
          	<div class="card mb-3">
				<div class="card-header">{{ __('Paskyros šalinimas') }}</div>
				<div class="card-body">
					<p class="card-text">Pašalinę paskyrą prarasite visus duomenis.</p>
					<form method="post" action="{{ route('user.delete', $user->id) }}">
						@csrf
						<button type="submit" class="btn btn-danger">
							{{ __('Pašalinti paskyrą') }}
						</button>
					</form>
				</div>    
        	</div>
      </div>
  </div>
</div>
@endsection

<script type="text/javascript">
	document.title = `{{ $user['name'] }}`
</script>