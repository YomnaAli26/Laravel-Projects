@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("yoga.create")}}">
        <input type="submit" value="Add yoga" class="btn btn-gradient-success">
    </form>
@foreach($videos as $video)

<video width="320" height="240" controls >

  <source src="{{asset('storage/videos/yoga')}}/{{$video['yoga']}}" type="video/mp4">

</video>

@endforeach

@endsection
