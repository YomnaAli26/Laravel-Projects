<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients'Reservations</title>
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

@include('layouts.site.doctor.inc.navbar')
<!--end navbar-->
<section class="container">
    <p></p>
    <div class="title">
        <h1>Patients'Reservations</h1>
    </div>

    @foreach($appointments as $appointment)

        <div class="only-div">
            <img src="{{asset('storage/images/users/'.$appointment->user->img)}}">

            <div class="float-div">
                <h2>{{$appointment->user->name}}</h2>
{{--                <h3>{{$appointment->user->degree}}</h3>--}}
                <h3 id="online">Online Consualtion</h3>
                <h4 >With </h4>
                <p>{{$appointment->doctor->name}}</p>
                <div class="booking-stars">

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
        <a href="{{route("home")}}">Back To Profile</a>
    </div>
</section>

<!--start footer-->

@include('layouts.site.doctor.inc.footer')



<!--end footer-->

<script src="{{asset('site/js/main.js')}}"></script>

</body>

</html>













