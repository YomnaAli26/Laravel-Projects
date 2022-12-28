@extends('layout.app')
@section('title')Edit Article @endsection
@section('content')

    <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="exampleInputEmail1" class="form-label" >Title</label>
        <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$article->title}}"><br><br>
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control"placeholder="Enter Description" name="desc" value="{{$article->description}}"><br><br>
        <label for="exampleInputEmail1" class="form-label">Body</label>
        <textarea  name="body"class="form-control" cols="30" rows="10" >{{$article->body}}

    </textarea><br><br>
        <label for="exampleInputEmail1" class="form-label">Upload Article Photo</label>
        <input type="file" class="form-control" name="img"  >

        <img src="{{asset('images/articles/'.$article->img)}}" width="100px" height="150px" >
        <input type="hidden" name="hidden_image" value="{{$article->img}}">
        <br><br>
        <input type="submit" name="send" value="Update" class="btn btn-primary my-2">

    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <form>

    @endif
@endsection
