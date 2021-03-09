<!doctype html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
        <meta name="author" content="ParkerThemes">
        <link rel="shortcut icon" href="{{asset('admin_assets/img/fav.png')}}" />

        <!-- Title -->
        <title>Signup</title>
        

        <!-- *************
            ************ Common Css Files *************
        ************ -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('admin_assets/css/main.css')}}" />

    </head>

    <body class="authentication">

        <!-- Container start -->
        <div class="container">
            
            <form method="POST" action="{{ route('register') }}">@csrf
                <div class="row justify-content-md-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                        <div class="login-screen">
                            <div class="login-box">
                                <a href="#" class="login-logo">
                                    <img src="{{asset('admin_assets/img/logo.png')}}" alt="Goldfinch Admin Dashboard" />
                                </a>
                                <h5>Welcome,<br />Create your Admin Account.</h5>
                                 <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Conform Password">
                                    </div>
                                    <small id="passwordHelpInline" class="text-muted">
                                        Password must be 8-20 characters long.
                                    </small>
                                </div>
                                <div class="actions mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember_pwd">
                                        <label class="custom-control-label" for="remember_pwd">Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Signup</button>
                                </div>
                                <hr>
                                <div class="m-0">
                                    <span class="additional-link">Have an account? <a href="{{ route('login') }}" class="btn btn-secondary">Login</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- Container end -->

    </body>


</html>