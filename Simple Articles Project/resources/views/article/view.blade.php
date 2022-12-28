@extends('layout.app')
@section('content')
@section('title')
    View Article
@endsection
<div class="d-flex position-relative">
    <img src="{{asset('images/articles/'.$article->img)}}" width="450px" height="400px" class="flex-shrink-0 me-3" alt="...">
    <div>
        <h5 class="mt-0">{{$article->title}}</h5>
        <p>{{$article->body}}</p>
        <dt>Date Of Creation</dt><dd>{{$article->created_at}}</dd>
        <br>
        <a href="/articles" class="stretched-link">Go Back</a>

    </div>
</div>
@endsection
