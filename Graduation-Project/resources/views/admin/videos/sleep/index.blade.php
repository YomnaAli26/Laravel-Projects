@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("sleep.create")}}">
        <input type="submit" value="Add sleep" class="btn btn-gradient-success">
    </form>
@foreach($videos as $video)

<video width="320" height="240" controls >

  <source src="{{asset('storage/videos/sleep')}}/{{$video['sleep_better_meditation']}}" type="video/mp4">

</video>

@endforeach
@endsection
