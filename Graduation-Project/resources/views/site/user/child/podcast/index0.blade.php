@extends("layouts.site.user.child.master")
@section("title")
    podcasts
@endsection
@section("content")
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
        <video src="{{asset("site/video/4.mp4")}}" controls poster="{{asset("site/images/51.jpg")}}" height="auto" width="100%"
               style="cursor: pointer;"></video>
               <a  href="">Relax your mind</a>
        <div>
        <h5>Poadcast </h5>
        <h5 id="h5"> (5 sessions)</h5>
</div>
    </div>
    <div class="vid">
        <video src="{{asset("site/video/4.mp4")}}" controls poster="{{asset("site/images/59.jpg")}}" height="auto" width="100%"
               style="cursor: pointer;"></video>
               <a  href="" >Manage your time</a>
        <div>
        <h5>Poadcast </h5>
        <h5 id="h5"> (5 sessions)</h5>
</div>
    </div>
    <div class="vid">
        <video src="../video/4.mp4" controls poster="{{asset("site/images/58.jpg")}}"" height="auto" width="100%"
               style="cursor: pointer;"></video>
               <a  href="">Reduce Social Media</a>
        <div>
        <h5>Poadcast </h5>
        <h5 id="h5"> (5 sessions)</h5>
</div>
    </div>
    <div class="vid">
        <video src="../video/4.mp4" controls poster="{{asset("site/images/55.jpg")}}" height="auto" width="100%"
               style="cursor: pointer;"></video>
               <a  href="" >Importance of poadcast </a>
               <div>
        <h5>Poadcast </h5>
        <h5 id="h5"> (5 sessions)</h5>
</div>
    </div>
</div>
<!-- end sec div -->

<!-- start third div -->
<div class="latest">
    <h2>Latest podcast</h2>
    <a href="">See all <i class="fa-solid fa-greater-than"></i></a>
</div>
<div class="thirddiv">
    @foreach($podcasts as $podcast)
    <div class="vid">
        <video src="{{asset('storage/videos/podcasts/'.$podcast->video)}}" controls poster="{{asset("site/images/36.jpg")}}" height="auto" width="100%"
              style="cursor: pointer;" ></video>
        <a href="{{route('podcast.show',$podcast->id)}}">{{$podcast->name}}</a>
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
