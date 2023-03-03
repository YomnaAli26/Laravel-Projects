@extends('layouts.app')
@section('title')
    Index Page
@endsection
@section('content')

<a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>

<table class="table mt-5 container">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th>Image</th>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">posted by</th>
        <th scope="col">created at</th>
        <th scope="col">View</th>
        <th scope="col">Edit</th>
        <th scope="col">Soft Delete</th>
        <th scope="col">Force Delete</th>
    </tr>

    </thead>
    <tbody>
    @foreach($posts as $post )
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td><img src="{{asset('Images/Posts/'.$post->img)}}" alt="" height="100" width="100"></td>
        <td>{{$post->title}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->user ? $post->user->name : 'user not defined'}}</td>
        <td>{{$post->created_at}}</td>

        <td>
            <a href="{{route('posts.show',['post'=>$post['id']])}}" class="btn btn-info">View</a>
        </td>

        <td>
            <a href="{{route('posts.edit',['post'=>$post['id']])}}" class="btn btn-primary">Edit</a>
        </td>
        <td>
            <a href="{{route('posts.softDelete',['post'=>$post])}}" class="btn btn-warning">Delete</a>
        </td>

        <td>
            <a data-bs-toggle="modal" class="btn btn-danger"  data-bs-target="#deleteUserModal_{{$post->id}}">
                Delete Forever</a>

            <!-- Delete Post Modal -->
            <div class="modal fade" id="deleteUserModal_{{$post->id}}" data-backdrop="static" tabindex="-1" role="dialog"
                 aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('posts.destroy',['post'=>$post['id']]) }}" method="post">
                            <div class="modal-body">
                                @csrf
                                @method('delete')
                                <h5 class="text-center">Are You Sure that you want to delete post number:
                                    {{ $post->id }}  ?</h5>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-danger">Yes,Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </td>
    </tr>

    @endforeach


    </tbody>
</table>
    {{$posts->links()}}
<a href="{{route('delete-old-posts')}}" class="btn btn-danger">Delete Old Posts</a>
@endsection


