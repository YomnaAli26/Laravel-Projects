@extends('layouts.app')
@section('title')
    Create Page
@endsection
@section('content')
    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" name="description" ></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="img">
        </div>


        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
