@extends('layouts.admin.master')
@section('content')
    <a href="{{route("users.create")}}" class="btn btn-gradient-success">Add User</a>
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date of Birth</th>
                         <th  scope="col">Image</th>
                         <th  scope="col">Phone Number</th>
                         <th  scope="col">Address</th>
                        <th  scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td class="py-1">{{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td>{{$user->Gender}}</td>
                        <td>{{$user->DateOfBirth}} </td>
                        <td class="py-1">
                            <img src="{{asset('storage/images/users/'.$user->img)}}" alt="image" />
                        </td>
                        <td> {{$user->PhoneNumber}}</td>
                        <td> {{$user->Address}}</td>


                        <td>
                            <form method="post"  action="{{route("users.destroy",$user->id)}}">
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
