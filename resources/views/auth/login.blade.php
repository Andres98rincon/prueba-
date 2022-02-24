@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <img height="570px" src="{{asset('img/login.jpeg')}}" alt="">

    </div>
    <div class="col-sm-6">
        <h1 class="text-center mb-5"><strong>Happy Pet</strong></h1>
        <h4 class="text-center"><strong>Login</strong></h4>
        <form style="padding-left:120px;padding-right:120px" method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" class="ccol-form-label text-md-end">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>


            <div class="row mb-0">
                <div class="text-center mt-4">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
                <div class="text-center mt-5">
                <button  type="submit" class="btn btn-dark col-sm-9">
                        {{ __('Login') }}
                    </button>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection