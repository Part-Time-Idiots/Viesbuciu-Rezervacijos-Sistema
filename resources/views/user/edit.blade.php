@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Redaguoti paskyrą') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf
                        
                        @if(session('success'))
							<div class="alert alert-success" role="alert">
								{{ session('success') }}
							</div>
                        @endif



                        <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Vardas') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ $user['name'] }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Pavardė') }}</label>
    
                                <div class="col-md-6">
                                    <input id="surname" value="{{ $user['surname'] }}" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('El. pašto adresas') }}</label>

                            <div class="col-md-6">
                                <input id="email" value="{{ $user['email'] }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Gimimo data') }}</label>

                            <div class="col-md-6">
                                <input id="birthday" value="{{ $user['birthday'] }}" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="birthday">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="personal_code" class="col-md-4 col-form-label text-md-right">{{ __('Asmens kodas') }}</label>
    
                                <div class="col-md-6">
                                    <input id="personal_code" value="{{ $user['personal_code'] }}" type="text" class="form-control @error('personal_code') is-invalid @enderror" name="personal_code" value="{{ old('personal_code') }}" autocomplete="personal_code" autofocus>
    
                                    @error('personal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Išsaugoti pakeitimus') }}
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
