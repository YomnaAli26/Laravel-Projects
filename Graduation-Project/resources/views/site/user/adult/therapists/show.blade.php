<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapist Profile for Patient</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist Profile for Patient.css')}}">
    <script src="{{asset('site/js/sweetalert.min.js')}}"></script>

</head>

<body>

<!--start navbar-->

@include("layouts.site.user.adult.inc.navbar")
<!--end navbar-->
@include('sweet::alert')



<section class="container">
    <div class="row">

        <div class="col-3">
            <div class="first">
                <img src="{{asset('storage/images/doctors/'.$doctor->img)}}" id="doc-pic">
                <h1>{{$doctor->name}}</h1>
                <h2>{{$doctor->degree}}</h2>
                <Div class="rate_num">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p id="num">0.5</p>
                </div>

            </div>
        </div>

        <div class="col-9 sec">
            <div class="first-right">
                <div class="book">
                    <i class="fa-solid fa-bookmark" id="icons4"></i>
                    <h4>{{$doctor->experience}}<br>
                        <p id="exp">experience</p>
                    </h4>
                </div>

                <div class="book b2" style="margin-left: 30px;">
                    <i class="fa-solid fa-user-tie" id="icons4"></i>
                    <h4>1.500+<br>
                        <p id="exp">patient</p>
                    </h4>
                </div>

            </div>
            <div class="specialist ">
                <h3>Specialists</h3>
                <h4>Anxiety</h4>
                <h4 id="same">Stress</h4>
                <h4 id="same">Counseling</h4>
            </div>
            <div class="about">
                <h3>About</h3>
                <p id="disc">{{$doctor->about}}<br>in treating her patient <a href="#">learn
                        more...</a></p>
            </div>
            <div>
                <button id="appointment" onclick="openPopup()">Book Appointment</button>
                <div class="overlay">
                    <div class="popup" id="popup">
                        <div class="pop-nav">
                            <img src="{{asset('site/images/logo.jpg')}}" id="relife-logo" >
                        </div>
                        <div class="row">
                            <div class="col-3 doctor-profile">
                                <img src="{{asset('storage/images/doctors/'.$doctor->img)}}" id="doc-pop">
                                <h1>{{$doctor->name}}</h1>
                                <h2>{{$doctor->degree}}</h2>

                                <div class="pop-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <p>[320]</p>
                                </div>
                            </div>


                            <div class="col-9 right-side">
                                <h1>Appointment</h1>
                                <form action="{{route('appointment.store',$doctor->id)}}" method="post">
                                    @csrf
                                    <div class="email-address">
                                        <label for="fname">Full Name</label>
                                        <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" id="fname" name="name" placeholder="full name">
                                    </div>
                                    <div class="email-address">
                                        <label for="email">Email Address</label>
                                        <input type="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="email" name="email" placeholder="email address">
                                    </div>
                                    <div class="pop-input">
                                        <div class="slot">
                                            <label for="time">Time</label>
                                            <input type="time" id="time" name="Time" min="09:00" max="18:00" required>
                                        </div>
                                        <div class="date">
                                            <label for="Date">Date</label>
                                            <input type="date" id="date" name="Date">
                                        </div>

                                    </div>

                                <div class="pop-btn">
                                    <input type="submit" class="booking" value="Confirm Booking">
                                    <a href="#"  id="details" onclick="closePopup()">Close</a>

                                </div>

                                </form>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="posts">
            <h3>Posts</h3>
        </div>

        @foreach($Posts as $Post)
        <div class="tulip">
            <img src="{{asset('/storage/images/doctors/'.$doctor['img'])}}" alt="Avatar" class="avatar1">

            <div class="title">
                <h3>{{$doctor->name}} </br>

                </h3>

                <div class="right-icons">
                    <i class="fa-solid fa-clock"></i> {{$Post->created_at->shortAbsoluteDiffForHumans()}}
                </div>

            </div>

        </div>

        <div class="doc-post">
            <p id="ppos1">{{$Post->content}}</p>
        </div>
        <div class="left-icons">
            <P id="like"> 77 <button><i class="fa-regular fa-thumbs-up"></i></button></P>

            <p id="comment"> 1K <button><i class="fa-solid fa-comments"></i></button></p>
        </div>

    @endforeach
        <div class="three-divs">
            <h1>Review</h1>

        </div>
        <div class="final-part">
            @foreach($reviews as $review)
            <div class="final-part1">
                <img src="{{asset('/storage/images/users/'.$review->user->img)}}" alt="Avatar" class="avatar2">
                <div class="pic">

                    <h5>{{$review->user->name}}</br>
                        <p>{{$review->created_at->shortAbsoluteDiffForHumans()}}</p>
                    </h5>


                    <div class="review">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                </div>
                <p id="user">{{$review->content}} <a href="#">More..</a></p>

            </div>

            @endforeach
        </div>
    <form action="{{route("therapist.review",$doctor->id)}}" method="post">
        @csrf
    <div class="user-review">
                    <img  src="{{asset("storage/images/users/".\Illuminate\Support\Facades\Auth::user()->img)}}">
                    <textarea id="review" name="content" placeholder="Add a review"></textarea>

                </div>
                <div class="review-button">
                    <button>Add Review</button>
         </div>
    </form>



</section>

<!--start footer-->

@include("layouts.site.user.adult.inc.footer")


<!--end footer-->

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Therapist Profile for Patient.js')}}"></script>
<script src="{{asset('site/js/sweetalert.min.js')}}"></script>
</body>

</html>
