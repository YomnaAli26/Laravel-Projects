@extends("layouts.site.user.child.master")
@section("title")
Article
@endsection
@section('content')
    <section class="container">

            <div class="first">
                <h1>{{$article->desc}}</h1>

            </div>


            <img src="{{asset('storage/images/articles/'.$article['img'])}}"  class="midimg"><br>

            <div class="txt">

                <p>
                    {{$article->content}}
                </p>
                <br><br>

            </div>

    </section>
@endsection
