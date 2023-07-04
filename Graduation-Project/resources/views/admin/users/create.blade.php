@extends('layouts.admin.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route("users.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control"  placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date Of Birth</label>
            <input type="date" class="form-control"  placeholder="Enter name" name="DateOfBirth">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <br>
            <select name="Gender"  class="form-control">
                <option  value="Male">Male</option>
                <option  value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label >User's Image</label><br>
            <input type="file" class="btn btn-gradient-primary" name="img" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control"  placeholder="Enter Phone Number" name="PhoneNumber">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <textarea class="form-control"  placeholder="Enter Address" name="Address"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>



        <button type="submit" class="btn btn-gradient-primary">Add</button>
    </form>
@endsection
