@extends('auth.layout.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('deal/css/auth.css') }}">
@endsection

@section('title', 'Login')

@section('content')

    <div class="card" id="card-login">

        <div class="card-body">
            <h3 class="text-center mb-3">{{ __('Login') }}</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="input-text-custom @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label">{{ __('Senha') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password"
                            class="input-text-custom @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="padding-left: 0px">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 d-flex justify-content-between">
                        <input type="submit" class="btn btn-primary btn-custom-width" value="{{ __('Login') }}">
                        <a href="{{ route('register') }}"
                            class="btn btn-secondary btn-custom-width">{{ __('Cadastre-se') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
