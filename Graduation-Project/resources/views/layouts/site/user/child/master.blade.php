<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">
    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/Home for Children.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/articles for children.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/poadcastchild.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/readarticle-child.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/yogachildren.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/Prescription for Patient.css')}}">


    <script src="{{asset('site/js/main.js')}}"></script>
    <title>@yield("title")</title>
</head>

<body>
<!--start navbar-->

@include("layouts.site.user.child.inc.navbar")
<!--end navbar-->
@yield('content')
<!-- start footer -->
@include("layouts.site.user.child.inc.footer")

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Home.js')}}"></script>
<script src="{{asset('site/js/Prescription for Patient.js')}}"></script>

</body>

</html>
