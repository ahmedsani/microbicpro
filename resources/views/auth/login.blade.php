@extends('auth.layout')
@section('content')
<form action="{{ route('login') }}" class="form-signin">
    @csrf
    <div class="account-logo">
        <a href="#"><img src="{{asset('img/logo-dark.png')}}" alt=""></a>
        <p>{{ __('Microbicpro Login') }}</p>
    </div>
    <div class="form-group">
        <label>{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" autofocus="" class="form-control @error('email') is-invalid @enderror" required
            autocomplete="">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label>{{ __('Password') }}</label>
        <input id="password" name="password" type="password"
            class="form-control @error('password') is-invalid @enderror" autocomplete="" required="">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group text-right">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        @endif
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary account-btn">{{ __('Login') }}</button>
    </div>

</form>
@endsection