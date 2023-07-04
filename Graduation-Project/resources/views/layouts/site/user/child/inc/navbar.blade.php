<nav>
    <img src="{{asset("site/images/logo.jpg")}}" class="logo" alt="logo">

    <div class="center">
        <ul>
            <li><a href="{{route("home")}}">Home</a></li>
            <li><a href="{{route("therapist.index")}}">Therapists</a></li>
            <li><a href="#">Materials <i class="fa-solid fa-caret-down"></i></a>
                <ul>
                    <li><a href="{{route("child.podcast.index")}}">Poadcast</a></li>
                    <li><a href="{{route("child.article.index")}}">Articles</a></li>
                    <li><a href="{{route("safe-space.index")}}">Safe Space</a></li>
                    <li><a href="{{route('child.yoga.index')}}">Meditation</a></li>
                    <li><a href="{{route('child.yoga.index')}}">Yoga</a></li>
                    <li><a href="">Sport</a></li>

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
                <img src="{{asset("site/images/ben.jpg")}}" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@ebrahim</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="{{asset("site/images/dave.jpg")}}" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@khaled</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="{{asset("site/images/steve.jpg")}}" alt="Avatar" class="avatar">
                <div class="text">
                    <h4>@ahmed</h4>
                    <p>Has requested to confirm appointment. </p>
                    <button>Confirm</button>
                    <button>Cancel</button>
                </div>

            </div>
            <div class="notifi-item">
                <img src="{{asset("site/images/customer-2.jpg")}}" alt="Avatar" class="avatar">
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
                <a href="{{route("child.Prescription.index")}}">Prescription</a>
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
