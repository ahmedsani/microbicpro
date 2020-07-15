
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
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="account-box">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="account-logo">
                            <a href="index-2.html"><img src="{{asset('img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                            <a href="login.html">Back to Login</a>
                        </div>
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