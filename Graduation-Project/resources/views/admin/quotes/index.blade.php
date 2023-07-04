@extends('layouts.admin.master')
@section('content')
    <a href="{{route("quotes.create")}}" class="btn btn-gradient-success">Add Quote</a>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Quotes</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">emotion name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($quotes as $quote)
                        <tr>
                            <td> {{$quote->id}} </td>
                            <td class="py-1">
                                <img src="{{asset('storage/images/quotes/'.$quote->img)}}" alt="image" />
                            </td>
                            <td>{{$quote->emotion?$quote->emotion->name:"None"}}</td>
                            <td><a href="{{route("quotes.edit",[$quote->id])}}" class="btn btn-gradient-primary">Edit</a></td>

                            <td>
                                <form method="post"  action="{{route("quotes.destroy",$quote->id)}}">
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
