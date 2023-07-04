<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/editprofile.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/Home.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist Chat.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist Profile for Therapist.css')}}">



    <script src="{{asset('site/js/main.js')}}"></script>
    <title>@yield("title")</title>
</head>

<body>
<!--start navbar-->

@include("layouts.site.doctor.inc.navbar")
<!--end navbar-->

@yield('content')

<!-- start footer -->
@include("layouts.site.doctor.inc.footer")


<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/chat.js')}}"></script>

</body>

</html>
