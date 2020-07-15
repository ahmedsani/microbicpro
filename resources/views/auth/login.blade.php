<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Microbicpro</title>
    <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
   
</head>
<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ route('login') }}" class="form-signin">
                        @csrf
                        <div class="account-logo">
                            <a href="#"><img src="{{asset('img/logo-dark.png')}}" alt=""></a>
                            <p>{{ __('Microbicpro Login') }}</p>
                        </div>
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" autofocus="" class="form-control @error('email') is-invalid @enderror" required autocomplete="" >
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="" required="">
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
                        <!--<div class="text-center register-link">
                            Don’t have an account? <a href="register.html">Register Now</a>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>


</html>
