@extends('auth.layout')
@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="account-logo">
        <a href="index-2.html"><img src="{{asset('img/logo-dark.png')}}" alt=""></a>
    </div>
    <div class="form-group">
        <label>Enter Your Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
    </div>
    <div class="text-center register-link">
        <a href="/login">Back to Login</a>
    </div>
</form>
@endsection