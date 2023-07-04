@extends('layouts.site.user.adult.master')
@section("title")
    Edit Your Profile
@endsection
@section('content')

        <div class="container px-4 mt-4">

        <br class="mt-0 mb-4 ">
        <div class="row">
            <div class="col-3">
                <!-- Profile picture card-->

                <div class="card mb-4">

                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <div class="profile">
                            <img id="blah" src="{{asset('storage/images/users/'.$users['img'])}}">

                        </div>
                    </div>
                </div>
                <div class="unknown">
                    <h2 >Sign anonymously</h2>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="col-9">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('update-profile',$users['id'])}}">
                             @csrf
                            @method('PUT')
                            <!-- Form Group (username)-->
                                <label class="small mb-1 stm" for="inputUsername"
                                       style="position: relative; top: .3rem; padding-left: 3px;">Username (how your name
                                    will appear to
                                    other users on the site)</label>
                                <input value="{{$users->name}}" class="form-control" id="inputUsername" type="text" name="name"
                                       placeholder="Enter your username">
                            <!-- Form Row-->
                            <div class="row mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input value="{{$users->PhoneNumber}}" class="form-control" id="inputPhone" type="tel" name="phone"
                                           placeholder="Enter your phone number" >
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" value="{{$users->DateOfBirth}}" id="inputBirthday" type="date" name="birthday"
                                           placeholder="Enter your birthday" >
                                </div>
                            </div>
                            <!-- Form Row -->
                            <div class="row mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-6">
                                    <label class="small mb-1" for="currpass">Current Password</label>
                                    <input class="form-control" id="currpass" type="password" placeholder="••••••" name="password"
                                           >
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-6">
                                    <label class="small mb-1" for="newpass">New Password</label>
                                    <input class="form-control" id="newpass" type="password" placeholder="••••••" name="newpass"
                                           >
                                </div>

                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input  value="{{$users->email}}" class="form-control" id="inputEmailAddress" type="email" name="email"
                                       placeholder="Enter your email address" >
                            </div>
                                 <div class="mb-3">
                                     <label class="small mb-1" for="inputEmailAddress">Upload New Photo</label>
                                     <input   class="form-control" id="inputEmailAddress" type="file" name="img"
                                             placeholder="Enter your email address" >
                                 </div>

                            <!-- Save changes button-->
                            <button class="btn2 btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </div>

@endsection
