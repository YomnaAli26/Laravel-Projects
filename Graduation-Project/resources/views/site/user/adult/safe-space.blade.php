<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Safe Space</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">
    @livewireStyles
    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/safe space.css')}}">

</head>
<body>
@include("layouts.site.user.adult.inc.navbar")
<section class="container">
    <div class="header">
        <h1>My Safe space</h1>

    </div>
    <div class="bc-image">
        <img src="{{asset("site/images/self_space.PNG")}}" class="mid-image">

    </div>
    @foreach($safes_spaces as $safe_space)
    <h3>{{$safe_space->created_at->format("M,Y")}}</h3>
    <div class="vl">
        <h4>{{$safe_space->created_at->format("d M")}}</h4>
        <div class="vertical">
            <p>{{$safe_space->content}}</p>
        </div>
    </div>

    @endforeach

    <div>
        <button id="plus" class="plus" onclick="openPopup()"> Add Note</button>


        <div class="overlay">
            <div class="popup" id="popup">
                <form action="{{route("safe-space.store")}}" method="post">
                    @csrf
                <div class="textarea">
                    <textarea name="content" id="textarea"
                              placeholder="Write a note ...."></textarea>
                </div>
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                <div class="input">

                    <button id="save" >Save</button>
                    <button class="done" onclick="closePopup()">Close</button>

                </div>
                </form>
            </div>
        </div>
        </div>

    </div>

</section>
<script src="{{asset('site/js/safe space.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
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
<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Therapist Profile for Patient.js')}}"></script>
@livewireScripts
</body>
</html>
