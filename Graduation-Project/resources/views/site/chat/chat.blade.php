<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Therapy</title>
    <link rel="icon" href="../images/logo-transparent.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/grouptherapy.css')}}">
    @livewireStyles
</head>

<body>

<!--start navbar-->

<nav>
    <img src="{{asset('site/images/logo.jpg')}}" class="logo" alt="logo">


    <div class="center">
        <ul>
            <li><a href="{{route("home")}}">Home</a></li>
            <li><a href="{{route("therapist.index")}}">Therapists</a></li>
            <li><a href="#">Materials <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{route("podcast.index")}}">Poadcasts</a></li>
                    <li><a href="{{route("article.index")}}">Articles</a></li>
                    <li><a href="{{route("safe-space.index")}}">Safe Space</a></li>
                    <li><a href="{{route("yoga")}}">Meditation</a></li>
                    <li><a href="{{route("yoga")}}">Yoga</a></li>
                </ul>
            </li>
            <li><a href="{{route("favourite.index")}}">Favourite</a></li>
            <li><a href="{{route("chat")}}">Chat</a></li>

        </ul>
    </div>

    <section class="lastpart">
        <div class="icon" onclick="toggleNotifi()">
            <i class="fa-sharp fa-solid fa-bell"></i>
        </div>
        <div class="notifi-box" id="box">

            <div class="notifi-item">
                <img src="../images/ben.jpg" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@ebrahim</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="../images/dave.jpg" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@khaled</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="../images/steve.jpg" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@ahmed</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="../images/customer-2.jpg" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@mohamed</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><img src="{{asset("storage/images/users/".\Illuminate\Support\Facades\Auth::user()->img)}}" height="47px" width="47px">
                <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
            </button>
            <div class="dropdown-content">
                <a href="{{route("edit-profile",\Illuminate\Support\Facades\Auth::user()->id)}}">Profile</a>
                <a href="{{route("booking.index")}}">Booking</a>
                <a href="{{route('privacy')}}">Privacy</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </section>
</nav>
<!--end navbar-->


<!-- Main container -->
@livewire('chat-box')

<!--start footer-->

<footer>
    <div class="fpart">
        <img src="{{asset('site/images/logo.jpg')}}" height="60px" width="54px">
        <p>Help yourself with us<br>with best chatbot, therapists and<br> better
            selfcare
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
            <li><a href="#">Favourite</a></li>
            <li><a href="#">Profile</a></li>
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

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/chat.js')}}"></script>
@livewireScripts
</body>

</html>
