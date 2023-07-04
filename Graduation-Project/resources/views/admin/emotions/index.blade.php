@extends('layouts.admin.master')
@section('content')
    <a href="{{route("emotions.create")}}" class="btn btn-gradient-success">Add Emotion</a>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Emotions</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($emotions as $emotion)
                        <tr>
                            <td> {{$emotion->id}} </td>
                            <td>{{$emotion->name}}</td>
                            <td class="py-1">
                                <img src="{{asset('storage/images/emotions/'.$emotion->emotion_img)}}" alt="image" />
                            </td>
                            <td><a href="{{route("emotions.edit",[$emotion->id])}}" class="btn btn-gradient-primary">Edit</a></td>

                            <td>
                                <form method="post"  action="{{route("emotions.destroy",$emotion->id)}}">
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
