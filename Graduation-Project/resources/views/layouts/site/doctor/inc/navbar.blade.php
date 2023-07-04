<nav>
    <img src="{{asset("site/images/logo.jpg")}}" class="logo" alt="logo">



    <section class="lastpart">

        <div class="icon">
            <a href="{{route("booking.show")}}"> <i class="fa-sharp fa-solid fa-bell"></i></a>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><img src="{{asset("storage/images/doctors/".\Illuminate\Support\Facades\Auth::guard("doctors")->user()->img)}}" height="47px" width="47px">
                <p>{{\Illuminate\Support\Facades\Auth::guard("doctors")->user()->name}}</p>
            </button>
            <div class="dropdown-content">
                <a href="{{route('profile.show',\Illuminate\Support\Facades\Auth::guard("doctors")->user()->id)}}">Profile</a>
                <a href="{{url('chatify')}}">Chat</a>
                <a href="{{route('prescription.show')}}">Patients' Prescriptions</a>

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
