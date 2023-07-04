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
    <form method="post" action="{{route("quotes.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Image</label><br>
            <input type="file" class="btn btn-gradient-primary" name="img" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Emotion</label>

            <select class="form-control" name="emotion_id">
                @foreach($emotions as $emotion)
                    <option value="{{$emotion->id}}" >{{$emotion->name}}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-gradient-primary">Add</button>
    </form>
@endsection
