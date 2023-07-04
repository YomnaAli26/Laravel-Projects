<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescriptions</title>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href= "{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href= "{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href= "{{asset('site/css/my booking.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/safe space.css')}}">
    <script src="{{asset('site/js/sweetalert.min.js')}}"></script>



</head>

<body>

<!--start navbar-->
@include('sweet::alert')

@include('layouts.site.doctor.inc.navbar')
<!--end navbar-->
<section class="container">
    <p></p>
    <div class="title">
        <h1>Patients' Prescriptions</h1>
    </div>
    @foreach($prescriptions as $prescription)

        <div class="only-div">

            <div class="float-div">
                <h2>{{$prescription->user->name}}'s prescription</h2>
                <h3>{{$prescription->content}}</h3>
                <button id="plus" class="plus" onclick="openPopup()"> Add Prescription</button>

                <div class="overlay">
                    <div class="popup" id="popup">
                        <form action="{{route('prescription.store')}}" method="post">
                            @csrf
                            <div class="textarea">
                    <textarea name="content" id="textarea"
                              placeholder="Write a Prescription ...."></textarea>

                            </div>
                            <input type="hidden" name="user_id" value="{{$prescription->user->id}}">
                            <div class="input">

                                <button id="save" >Save</button>
                                <button class="done" onclick="closePopup()">Close</button>

                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>


    @endforeach

</section>

<!--start footer-->

@include('layouts.site.doctor.inc.footer')



<!--end footer-->

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Therapist Profile for Patient.js')}}"></script>
<script src="{{asset('site/js/sweetalert.min.js')}}"></script>

</body>

</html>













