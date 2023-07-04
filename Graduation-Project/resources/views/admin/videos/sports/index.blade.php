@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("sports.create")}}">
        <input type="submit" value="Add sport" class="btn btn-gradient-success">
    </form>
@foreach($videos as $video)
<video controls >

  <source src="{{asset('storage/videos/sport/'.$video['sport'])}}" type="video/mp4">

</video>

@endforeach

@endsection
