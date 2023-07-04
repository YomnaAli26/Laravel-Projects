@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("quick.create")}}">
        <input type="submit" value="Add quick_and_easy" class="btn btn-gradient-success">
    </form>
@foreach($videos as $video)

   <video width="320" height="240" controls >

 <source src="{{asset('storage/videos/quick/'.$video['quick_and_easy'])}}" type="video/mp4">

</video>

@endforeach
@endsection
