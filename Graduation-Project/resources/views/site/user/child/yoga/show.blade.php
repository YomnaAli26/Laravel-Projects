@extends("layouts.site.user.child.master")
@section("title")

@endsection
@section('content')
    <section class="container">
        @foreach($yoga as $session)
        <div class="first">
            <h1>{{$session->title}}</h1>

        </div>

        <div class="third">

            <div class="time">
                <i class="fa-regular fa-clock"></i>
                <h5>{{$session->created_at->shortAbsoluteDiffForHumans()}}</h5>
            </div>

        </div>
        <img src="{{asset('storage/images/yoga/'.$session['img'])}}" class="midimg" >

        <div class="txt">
            <h3>{{$session->title}}</h3>
            <p>
                {{$session->content}}
            </p>
            <br><br>

        </div>
        @endforeach
    </section>
@endsection
