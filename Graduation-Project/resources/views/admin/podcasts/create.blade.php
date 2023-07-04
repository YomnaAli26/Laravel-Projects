@extends('layouts.admin.master')
@section('content')
    <form method="post" action="{{route("podcasts.store")}}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label >video</label>
            <input type="file" class="btn btn-gradient-primary" name="video" >
        </div>
        <div class="form-group">
            <label >image</label>
            <input type="file" class="btn btn-primary" name="img">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>

            <select class="form-control" name="cate_id">
                @foreach($category as $cate)
                <option value="{{$cate->id}}" >{{$cate->name}}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-gradient-primary"Add</button>

    </form>
@endsection
