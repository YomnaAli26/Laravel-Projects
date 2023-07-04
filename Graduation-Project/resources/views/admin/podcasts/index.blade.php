@extends('layouts.admin.master')
@section('content')
    <a href="{{route("podcasts.create")}}" class="btn btn-gradient-success">Add Podcast</a>
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($Podcasts as $podcast)
                <div class="col">
                    <div class="card shadow-sm">
                        <video controls>
                            <source src="{{asset('storage/videos/podcasts/'.$podcast->video)}}" >
                        </video>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$podcast->name}}</text>


                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route("podcasts.edit",$podcast->id)}}" class="btn btn-primary my-2">Edit</a><br><br>
                                    </div>


                                    <div class="btn-group">
                                        <form action="{{route("podcasts.destroy",$podcast->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="delete">
                                        </form>
                                    </div>



                            </div>
                            <small class="text-muted">Category:{{$podcast->category->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>



@endsection
