<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/favourite.css')}}">
    <link rel="stylesheet" href="{{asset("site/css/editprofile.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/articles.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/readarticle.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/poadcast.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/allpoadcast.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist Chat.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Prescription for Patient.css')}}">
    <script src="{{asset('site/js/sweetalert.min.js')}}"></script>

    @livewireStyles


    <script src="{{asset('site/js/main.js')}}"></script>
    <title>@yield("title")</title>
</head>

<body>
<!--start navbar-->

@include("layouts.site.user.adult.inc.navbar")
<!--end navbar-->
@yield('content')
@include('sweet::alert')
<!-- start footer -->
@include("layouts.site.user.adult.inc.footer")

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/chat.js')}}"></script>
<script src="{{asset('site/js/Home.js')}}"></script>
<script src="{{asset('site/js/Therapist Profile for Patient.js')}}"></script>
<script src="{{asset('site/js/Prescription for Patient.js')}}"></script>
<script src="{{asset('site/js/sweetalert.min.js')}}"></script>


@livewireScripts
</body>

</html>
