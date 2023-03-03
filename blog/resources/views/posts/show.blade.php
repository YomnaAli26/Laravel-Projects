@extends('layouts.app')
@section('title')
    View Page
@endsection
@section('content')
<div class="card">
    <div class="card-header">
    Post Details
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$post['title']}}</h5>
        <p class="card-text">{{$post['description']}}</p>

    </div>
@endsection
