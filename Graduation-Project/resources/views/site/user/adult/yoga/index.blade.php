<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/yoga.css')}}">

</head>

<body>


@include("layouts.site.user.adult.inc.navbar")

    <!-- start poadcast -->
    <section class="container poadcast">


        <!-- firdiv -->
        <div class="recommend">
            <h2>Recommended for you</h2>
        </div>
        <div class="secdiv">
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/yoga1.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Relax your mind</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/yoga10.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Manage your time</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/yoga2.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Reduce Social Media</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>

            </div>
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/yoga3.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Importance of poadcast</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
        </div>
        <!-- end sec div -->

        <!-- start third div -->
        <div class="latest">
            <h2>Lastest Yoga</h2>
        </div>
        <div class="thirddiv">
        @foreach($videos as $video)

            <div class="vid">
                <video src="{{asset('storage/videos/yoga')}}/{{$video['yoga']}}" height="auto" width="100%"
                    style="cursor: pointer;"></video>
                <h4>Relax your mind</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            @endforeach
            </div>
            <div class="thirddiv">
                 @foreach($videos as $video)
            <div class="vid">
                <video src="{{asset('storage/videos/yoga')}}/{{$video['yoga']}}" height="auto" width="100%"
                    style="cursor: pointer;"></video>
                <h4>Relax your mind</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            @endforeach</div>





        <!-- end third div -->
    </section>
    <!-- start footer -->
    @include("layouts.site.user.adult.inc.footer")


    <script src="{{asset('site/js/main.js')}}"></script>


</body>

</html>
