@extends('layouts.admin.master')
@section('content')
    <a href="{{route("categories.create")}}" class="btn btn-gradient-success">Add Category</a>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td> {{$category->id}} </td>
                            <td> {{$category->name}} </td>

                            <td class="py-1">
                                <img src="{{asset('storage/images/categories/'.$category->img)}}" alt="image" />
                            </td>
                            <td><a href="{{route("categories.edit",[$category->id])}}" class="btn btn-gradient-primary">Edit</a></td>

                            <td>
                                <form method="post"  action="{{route("categories.destroy",$category->id)}}">
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
