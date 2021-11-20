@extends('auth.layout.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('deal/css/auth.css') }}">
@endsection

@section('content')

    <div class="card" id="card-register">
        <div class="card-body">
            <h3 class="mb-3 text-center">{{ __('Cadastre-se') }}</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="name" >{{ __('Nome') }}</label>
                        <input id="name" type="text" class="input-text-custom" @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="email" >{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="input-text-custom @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="password" >{{ __('Senha') }}</label>
                        <input id="password" type="password" class="input-text-custom @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="password-confirm">{{ __('Confirme a senha') }}</label>

                        <input id="password-confirm" type="password" class="input-text-custom" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tipo_usuario_id" id="tipo_usuario_id_profissional" value="2" checked>
                                Profissional
                          </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="tipo_usuario_id" id="tipo_usuario_id_contratante" value="3">
                                Contratante
                            </label>
                        </div>
                        
                    </div>
                </div>

                <div class="form-group row mt-3 mb-0">
                    <div class="col-md-12 d-flex justify-content-between">
                        <a class="btn btn-danger btn-custom-width" href="{{ route('login') }}">
                            {{ __('Voltar') }}
                        </a>
                        <button class="btn btn-primary btn-custom-width" type="submit" >
                            {{ __('Cadastrar') }}
                        </button>
                    </div>
                   
                </div>
            </form>
        </div>
    </div>

@endsection
