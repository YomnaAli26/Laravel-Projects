@extends('layouts.site.user.adult.master')
@section('title')
    Podcasts
@endsection
@section('content')
    <section class="container ">
        <!-- first part -->
        <div class="vid">
            <video src="{{asset('storage/videos/podcasts/'.$pod->video)}}" controls poster="../images/36.jpg" width="100%" height="600px"></video>
            <div class="ddd">
                <h1>{{$pod->name}}</h1>
                <a href="{{route('pod.like',$pod->id)}}"><i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i></a>
            </div>

        </div>

    <!-- end first -->
        <div class="h1">
            <h1>Similar Podcasts</h1>
        </div>
        <!-- second part -->
        @foreach($podcasts as $podcast)
        <div class="more">
            <video src="{{asset('storage/videos/podcasts/'.$podcast->video)}}" controls poster="{{asset('storage/images/podcasts/'.$podcast->img)}}" height="auto" width="38%"
                   style="cursor: pointer;" ></video>
            <div class="txt">
                <h4><a href="{{route('podcast.show',$podcast->id)}}"style=" color: #ad6ce0;font-size: 14px; margin-top: .9rem;margin-left: .5rem;
    text-decoration: none;">{{$podcast->name}}</a></h4>
                <h4>Learn to relax, reduce stress and be happier. listen to podcast calmly and relax .<br>it typically
                    involves calm </h4>
            </div>

        </div>
        @endforeach
    </section>
@endsection
