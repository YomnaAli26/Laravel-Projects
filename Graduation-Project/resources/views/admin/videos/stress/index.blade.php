@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("stress.create")}}">
        <input type="submit" value="Add stress" class="btn btn-gradient-success">
    </form>
@foreach($videos as $video)

<video width="320" height="240" controls >

  <source src="{{asset('storage/videos/stress')}}/{{$video['stress_management_meditation']}}" type="video/mp4">

</video>

@endforeach

@endsection
