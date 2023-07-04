@extends('layouts.admin.master')
@section('content')
    <form method="post" action="{{route("quick.store")}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label >video</label><br>
            <input type="file" class="btn btn-gradient-primary" name="video" >
        </div>



        <button type="submit" class="btn btn-gradient-primary">Add</button>

    </form>
@endsection
