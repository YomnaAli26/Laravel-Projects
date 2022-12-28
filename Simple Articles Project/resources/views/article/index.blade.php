@extends('layouts.app')
@section('content')
@section('title')
    All Articles
@endsection
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">ALL Articles</h1>
            <p class="lead text-muted">In Our Website We Display ALL Articles And Users Can Create,Update and Delete
                only Articles Created By Themselves.</p>
            <p>
                <a href="/articles/create" class="btn btn-success my-2">Create Article</a>

            </p>
        </div>
    </div>
</section>
<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($articles as $article)
        <div class="col">
            <div class="card shadow-sm">

                <img src="{{asset('images/articles/'.$article->img)}}" class="bd-placeholder-img card-img-top"
                     width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                     focusable="false" ><title>Placeholder</title><rect width="100%" height="100%"
                                                                        fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                    {{$article->title}}</text>

                <div class="card-body">
                    <p class="card-text">{{$article->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        @can('update',$article)

                        <div class="btn-group">
                            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary my-2">Edit</a><br><br>
                        </div>

                        @endcan
                            @can('delete',$article)

                        <div class="btn-group">
                            <form action="/articles/{{$article->id}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="delete">
                            </form>
                        </div>
                            @endcan
                        <a href="/articles/{{$article->id}}" class="btn btn-info my-2">More Info</a>
                        <small class="text-muted">author:{{$article->user->fname}}</small>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



@endsection



{{--<table border="2">--}}
{{--    <tr>--}}
{{--        <th>Title</th>--}}
{{--        <th>Description</th>--}}
{{--        <th>image</th>--}}
{{--        <th>Body</th>--}}
{{--        <th>Date Of Creation</th>--}}
{{--    </tr>--}}

{{--    <tr>--}}
{{--    @foreach($articles as $article)--}}
{{--        <td>{{$article->title}}</td>--}}
{{--        <td>{{$article->description}}</td>--}}
{{--        <td><img src="{{asset('images/articles/'.$article->img)}}" width="100px" alt=""></td>--}}
{{--        <td>{{$article->body}}</td>--}}
{{--        <td></td>--}}


{{--    </tr>--}}
{{--    @endforeach--}}

{{--</table>--}}

