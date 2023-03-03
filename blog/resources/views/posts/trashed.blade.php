@extends('layouts.app')
@section('title')
    Index Page
@endsection
@section('content')

    <a href="{{route('posts.restore-all')}}" class="btn btn-success">Restore All</a>

    <table class="table mt-5 container">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">posted by</th>
            <th scope="col">created at</th>
            <th scope="col">Restore</th>

        </tr>

        </thead>
        <tbody>
        @foreach($posts as $post )

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->user ? $post->user->name : 'user not defined'}}</td>
                <td>{{$post->created_at}}</td>

               <td><a href="{{route('posts.restore',['post'=>$post->id])}}" class="btn btn-primary">Restore</a></td>
            </tr>

        @endforeach


        </tbody>
    </table>

@endsection


