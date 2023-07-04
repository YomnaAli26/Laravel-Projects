<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href= "{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href= "{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href= "{{asset('site/css/my booking.css')}}">

</head>

<body>

<!--start navbar-->

@include('layouts.site.user.adult.inc.navbar')
<!--end navbar-->
<section class="container">
    <p></p>
    <div class="title">
        <h1>My Booking</h1>
    </div>
    @foreach($appointments as $appointment)

    <div class="only-div">
        <img src="{{asset('storage/images/doctors/'.$appointment->doctor->img)}}">

        <div class="float-div">
            <h2>{{$appointment->doctor->name}}</h2>
            <h3>{{$appointment->doctor->degree}}</h3>
            <h3 id="online">Online Consualtion</h3>
            <h4 >With </h4>
            <p>{{$appointment->user->name}}</p>
            <div class="booking-stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p id="number">(320)</p>
            </div>
        </div>
    </div>

    <div class="date-time">
        <div>
            <h4>Date</h4>
            <div class="empty">{{$appointment->Date}}</div>
        </div>

        <div class="time">
            <h4>Time</h4>
            <div class="empty1">{{$appointment->Time}}</div>
        </div>

    </div>
    @endforeach
    <div class="booking-link">
        <a href="{{route("home")}}">Back To Home</a>
    </div>
</section>

<!--start footer-->

@include('layouts.site.user.adult.inc.footer')



<!--end footer-->

<script src="../js/main.js"></script>

</body>

</html>













