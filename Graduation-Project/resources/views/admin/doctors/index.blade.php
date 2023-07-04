@extends('layouts.admin.master')
@section('content')
    <form method="get" action="{{route("doctors.create")}}">
        <input type="submit" value="Add Doctor" class="btn btn-gradient-success">
    </form>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doctors</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th  scope="col">Image</th>
                        <th  scope="col">Degree</th>
                        <th  scope="col">Experience</th>
                        <th scope="col">Edit </th>
                        <th  scope="col">Delete</th>




                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td> {{$doctor->id}} </td>
                            <td class="py-1">{{$doctor->name}} </td>
                            <td> {{$doctor->email}} </td>

                           <td >
                            <img src="{{asset('storage/images/doctors/'.$doctor->img)}}" />
                        </td>
                            <td>{{$doctor->degree}} </td>

                            <td> {{$doctor->experience}}</td>
                            <td>
                                <a href="{{route("doctors.edit",$doctor->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form method="post"  action="{{route("doctors.destroy",$doctor->id)}}">
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
