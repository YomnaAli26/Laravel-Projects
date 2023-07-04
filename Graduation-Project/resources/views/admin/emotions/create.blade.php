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
    <form method="post" action="{{route("emotions.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label >Image</label>
            <input type="file" class="btn btn-gradient-primary" name="emotion_img" >
        </div>



        <button type="submit" class="btn btn-gradient-primary">Add</button>
    </form>
@endsection
