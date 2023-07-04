<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign in Patient</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/sign in patient.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/signup.css")}}">
</head>
<body>
<nav>
    <img src="{{asset("site/images/logo.jpg")}}" class="logo" alt="logo">
    @if (Route::has('register'))
        <a href="{{ route('register') }}" id="sign">Sign Up</a>
    @endif
</nav>

<section class="container">
    <div class="split left">
        <div class="signin">
            <h1>Sign In</h1>
        </div>
            <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form">
            <div>
                <label for="email" class="email1">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div>
                            <label for="password" class="password1">{{ __('Password') }}</label><br>
                            <input id="pass" type="password" placeholder="Enter Password"  name="password" required autocomplete="current-password"><br>
                            <br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

        </div>
        <div>
            @if (Route::has('password.request'))
                <a class="anchor2" href="{{ route('password.request') }}">
                    {{ __('Forget Password') }}
                </a>
            @endif
        </div>
        <div>
            <button type="submit" class="btn1">
                {{ __('Sign In') }}
            </button>
        </div>
        <div>
            <p>OR</p>
        </div>

        <div>
            <a href="{{url("auth/google")}}" class="btn gg"><i class="fa-brands fa-google icon1"></i>
                Login With Google</a>
            <a href="{{url("auth/facebook")}}" class="btn fb"><i class="fa-brands fa-facebook-f icon1"></i>
                Login With Facebook</a>
        </div>
    </form>
        </div>


    <!--start right side-->
    <div class="split right">
        <h1 class="heading1">Welcome Back!</h1>
        <img src="{{asset("site/images/40.jpeg")}}" alt="image40">
    </div>

</section>
<footer>
    <div class="fpart">
        <img src="{{asset("site/images/logo.jpg")}}" height="60px" width="54px">
        <p>Help yourself with us<br>with best chatbot, therapists and<br> better selfcare
        </p>
        <p>Mansoura, AhmedMaherstreet</p>
        <a href="#" ><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="#" id="left" ><i class="fa-brands fa-linkedin"></i></a>

    </div>
    <div class="spart" >
        <h2>Categories</h2>
        <ul>
            <li><a href="#">Therapists</a></li>
            <li><a href="#">Selfcare</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Chatbot</a></li>
            <li><a href="#">Chat</a></li>
        </ul>
    </div>
    <div class="tpart">
        <h2>Useful Links</h2>
        <ul>
            <li><a href="#">Terms Of Service</a></li>
            <li><a href="#">Your Account</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
    <div class="lpart">
        <h2>Stay Connected</h2>
        <div class="emailadd">

            <input type="email" id="email" name="email" placeholder="Enter Address">
            <button type="submit" class="tele"><i class="fa-regular fa-paper-plane "></i></button>

            <p><i class="fa-solid fa-phone"></i> Call +0109876567</p>
            <p><i class="fa-regular fa-envelope"></i> Contact@gmail.com</p>

        </div>
    </div>
</footer>

