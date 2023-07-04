@extends('layouts.admin.master')
@section('content')
    <form method="post" action="{{route("articles.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" name="desc">
        </div>
        <div class="form-group">
            <label >Article's Image</label><br>
            <input type="file" class="btn btn-gradient-primary" name="img" >
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
            <label >Content</label>
            <input type="text" class="form-control" name='content'/>
        </div>
        <button type="submit" class="btn btn-gradient-primary">Submit</button>

    </form>
@endsection
