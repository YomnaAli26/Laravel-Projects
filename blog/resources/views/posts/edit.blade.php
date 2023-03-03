@extends('layouts.app')
@section('title')
    Edit Page
@endsection
@section('content')
    <form method="post" action="{{route('posts.update',['post'=>$post['id']])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post['title']}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" name="description" >{{$post['description']}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Old Image</label><br>
            <img src="{{asset('Images/Posts/'.$post->img)}}" alt="" height="100" width="100"><br>
            <label for="exampleInputPassword1" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="img">
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
