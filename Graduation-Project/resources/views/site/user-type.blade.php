<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapist or Patient</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/therapist or patient.css")}}">
</head>

<body>

<section class="container">
    <h1>How do you want your Space ?</h1>
    <img src="{{asset("site/images/66.png")}}" alt="image66">
    <div>
                <a href="{{route("doctor.create")}}" id="anchor1">
                    Therapist
                </a>

                @if (Route::has('login'))
                <a href="{{route("login")}}" id="anchor2">
                    Patient
                </a>
                @endif
    </div>
</section>

</body>

</html>



