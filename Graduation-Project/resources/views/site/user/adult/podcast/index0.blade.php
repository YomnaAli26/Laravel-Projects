@extends('layouts.site.user.adult.master')
@section('title')
    Podcasts
@endsection
@section('content')
    <section class="container poadcast">

        <h1>You can listen to <span>Poadcast</span> in anytime within day and during doing any activities.</h1>
        <div class="firdiv">
            <video src="{{asset("site/video/4.mp4")}}" controls poster="{{asset("site/images/56.jpg")}}" height="auto" width="45%">
            </video>
            <p>Be kind to your mind <br>Learn to manage feeling with poadcast. </p>

        </div>
        <!-- firdiv -->
        <div class="recommend">
            <h2>Recommended for you</h2>
        </div>
        <div class="secdiv">
            <div class="vid">
                <video src="{{asset("site/video/4.mp4")}}" controls poster="{{asset('site/images/51.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Relax your mind</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            <div class="vid">
                <video src="{{asset("site/video/4.mp4")}}" controls poster="{{asset('site/images/59.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Manage your time</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/58.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Reduce Social Media</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>

            </div>
            <div class="vid">
                <video src="{{asset('site/video/4.mp4')}}" controls poster="{{asset('site/images/58.jpg')}}" height="auto" width="100%"
                       style="cursor: pointer;"></video>
                <h4>Importance of poadcast</h4>
                <h5>Poadcast </h5>
                <h5 id="h5"> (5 sessions)</h5>
            </div>
        </div>
        <!-- end sec div -->

        <!-- start third div -->
        <div class="latest">
            <h2>Latest podcast</h2>

        </div>
        <div  class="thirddiv">
            @foreach($podcasts as $podcast)
                <div class="vid">
                    <video src="{{asset('storage/videos/podcasts/'.$podcast->video)}}" controls poster="{{asset('storage/images/podcasts/'.$podcast->img)}}" height="auto" width="100%"
                           style="cursor: pointer;"></video>
                    <a href="{{route('podcast.show',$podcast->id)}}" style=" color: #ad6ce0;font-size: 14px; margin-top: .9rem;margin-left: .5rem;
    text-decoration: none;">{{$podcast->name}}</a>
                    <div>
                        <h5>Poadcast </h5>
                        <h5 id="h5"> (5 sessions)</h5>
                    </div>

                </div>

            @endforeach
        </div>
        <!-- end third div -->
    </section>

@endsection
