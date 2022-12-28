@extends('layouts.app')
@section('title')Create Article @endsection
@section('content')

<form action="/articles" method="post" enctype="multipart/form-data">
    @csrf
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" placeholder="Enter Title" name="title"><br><br>
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control"placeholder="Enter Description" name="desc"><br><br>
    <label for="exampleInputEmail1" class="form-label">Body</label>
    <textarea  name="body"class="form-control" cols="30" rows="10" >Enter Body Of The Article

    </textarea><br><br>
    <label for="exampleInputEmail1" class="form-label">Upload Article Photo</label>
    <input type="file" class="form-control" name="img"><br><br>
    <input type="submit" name="send" value="Create" class="btn btn-primary my-2">

</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif
@endsection
