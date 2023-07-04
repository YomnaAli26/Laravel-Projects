@extends('layouts.admin.master')
@section('content')
    <a href="{{route("articles.create")}}" class="btn btn-gradient-success">Add Article</a>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Articles</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td> {{$article->id}} </td>
                            <td> {{$article->desc}} </td>
                            <td> {{$article->category->name}} </td>


                            <td class="py-1">
                                <img src="{{asset('storage/images/articles/'.$article->img)}}" alt="image" />
                            </td>
                            <td><a href="{{route("articles.edit",[$article->id])}}" class="btn btn-gradient-primary">Edit</a></td>

                            <td>
                                <form method="post"  action="{{route("articles.destroy",$article->id)}}">
                                    @csrf
                                    @method('Delete')
                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>






            </div>
        </div>
    </div>


@endsection

