<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign UP Patient</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/signup.css")}}">
    

</head>
<body>
<nav>
    <img src="{{asset("site/images/logo.jpg")}}" class="logo" alt="logo">

        <a href="{{url('/')}}" id="sign">Sign In</a>


</nav>

<section class="container">
    <div class="split left">
        <div class="signup">
            <h1>Sign Up</h1>
        </div>
        <br>

        <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
            <div class="form">
                @csrf
                    <div>
                        <label for="name">Full Name</label><br><!--name -->
                        <input id="name" type="text" placeholder="Enter your full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <br>@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div>
                        <label for="name" >{{ __('Date Of Birth') }}</label><br><!--birth-->
                        <input id="name" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <br>
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <div><!--email-->
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>


                    <div><!--phone number-->
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                        <input id="name" placeholder="Enter your Phone Number" type="text" class="form-control @error('phone number') is-invalid @enderror" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <br>
                        @error('phone number')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <div>
                                <label for="name" >{{ __('Address') }}</label><br><!--address-->
                                <input id="name" placeholder="Enter your Address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>
                        <br>
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                    </div>
                <div><!--password-->
                    <label for="password" >{{ __('Password') }}</label><br>
                    <input id="password" placeholder="Enter Your Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <br>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div>
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" placeholder="Confirm Your Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div><!--types of addiction-->
                    <label for="addiction" class="addict">Types of addiction</label><br>
                    <select name="addiction" id="addiction" class="select">
                        @foreach($categories = \App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div>
                    <label for="image">{{ __('Upload Photo') }}</label>
                    <input  type="file" id="image"  class="form-control" name="img">
                    @error('img')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div><!--gender-->
                    <h3>Gender</h3><br>

                    <input type="radio" id="male" value="male" name="gender" >
                    <label for="male" style="color:black">Male</label>

                    <input type="radio" id="female" value="female" class="gen" name="gender">
                    <label for="female" style="color: black;">Female</label>


                </div>




            <div><!--sign button-->
                <button type="submit" class="btn1">Sign Up</button>
            </div>
            </div>
        </form>
            <div>
                <br>
                <p>OR</p>
            </div>
            <br>

            <div><!--google and facebook-->
                <a href="{{url("auth/google")}}" class="google btn">
                    <i class="fa-brands fa-google"></i>  Login With Google
                </a>
                <a href="{{url("auth/facebook")}}" class="fb btn">
                    <i class="fa-brands fa-facebook-f"></i>  Login With Facebook
                </a>
            </div>
        </div>



        <!-- right -->
    <div class="split right">
        <img src="{{asset("site/images/40.jpeg")}}" alt="photo">

    </div>

</section>
    <footer>

        <div class="fpart">
            <img src="{{asset("site/images/logo.jpg")}}" height="60px" width="54px" alt="logo">
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
            <input type="email" id="email" name="email" placeholder="Enter Address">
            <button class="tele"><i class="fa-regular fa-paper-plane subsen"></i></button>
            <p><i class="fa-solid fa-phone"></i> Call +0109876567</p>
            <p><i class="fa-regular fa-envelope"></i> Contact@gmail.com</p>
        </div>
    </footer>


    </body>

    </html>

