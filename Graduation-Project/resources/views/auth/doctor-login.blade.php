<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Therapist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/sign in therapist.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/sign in patient.css")}}">
</head>

<body>
<nav>
    <img src="{{asset("site/images/logo.jpg")}}" class="logo" alt="logo">
    <a href="{{route('login')}}" id="sign">Sign In As Patient</a>
</nav>
<!--end navbar-->

<!--start left side-->
<section class="container">
    <div class="split left">
        <div class="signin">
            <h1>Sign In</h1>
        </div>
        <!-- form -->

        <form action="{{route("doctor.store")}}" method="post">
            @csrf
            <div class="form">
                <div>
                    <label for="email" class="email1">Email Address</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <br>
                <div>
                    <label for="pass" class="password1">Password</label><br>
                    <input type="password" id="pass" name="password" placeholder="Enter Password"><br>
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
                <button class="btn1">Sign In</button>
            </div>


        </form>
    </div>
    <!-- end left side -->

    <!--start right side-->
    <div class="split right">
        <h1 class="heading1">Welcome Doctor!</h1>
        <img src="{{asset("site/images/65.jpeg")}}" alt="image65">
    </div>
</section>
<!-- end right side -->

<!--start footer-->
<footer>
    <div class="fpart">
        <img src="{{asset("site/images/logo.jpg")}}" height="60px" width="54px">
        <p>Help yourself with us<br>with best chatbot, therapists and<br> better selfcare
        </p>
        <p>Mansoura, AhmedMaherstreet</p>
        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-linkedin"></i></a>

    </div>
    <div class="spart">
        <h2>Categories</h2>
        <ul>
            <li><a href="#">Therapists</a></li>
            <li><a href="#">Materials</a></li>
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
            <p><i class="fa-regular fa-envelope"></i> Contact@Relife.com</p>

        </div>
    </div>
</footer>

<!--end footer-->


</body>

</html>
