@extends('layouts.site.user.adult.master')
@section('title')
    Result...
@endsection
@section('content')
    <section class="container">
        <div>
            @foreach($article as $art)

                <div class="first">
                    <h1>{{$art->desc}}</h1>
                    <div class="second">
                        <i class="fa-regular fa-heart heart " onclick="fillHeart(this)"></i>
                        <i class="fa fa-share-alt heart"></i>
                    </div>
                </div>


                <img src="{{asset('/storage/images/articles/'.$art->img)}}" alt="image16" width="500" height="300" >

                <div class="txt">
                    <h3>{{$art->desc}}</h3>
                    <p>{{$art->content}}
                    </p>
                    <br><br>

                </div>
            @endforeach
        </div>
    </section>
@endsection
