@extends('layouts.admin.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route("articles.update",$article->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="desc" value="{{$article->desc}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="content" value="{{$article->content}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>

            <select class="form-control" name="cate_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">

            <label >Article's Image</label><br>
            <input type="file" class="btn btn-gradient-primary" name="img" >
        </div>


        <button type="submit" class="btn btn-gradient-primary">Update</button>
    </form>
@endsection
