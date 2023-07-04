<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/favourite.css')}}">
    <script src="{{asset('site/js/sweetalert.min.js')}}"></script>


</head>

<body>

@include("layouts.site.user.adult.inc.navbar")

@include('sweet::alert')

<!--start of therapist div-->
<section class="container">
    <div class="first-phase">
        <p>Find the <span>best therapist</span> for yourself.</p>
        <p>Our specialists will help you to find the best decision for your problem.</p>
    </div>
    <div class="therapist">
        <h2>Best For You </h2>

    </div>
    <div class="therapist2"  >
    @foreach($doctorsdiv1 as $doctor)


            <div class="therapist3">

                <div class="therapist5">

                    <a href="{{route('therapist.show',$doctor->id)}}">
                        <img src="{{asset('storage/images/doctors/'.$doctor->img)}}"/>
                    </a>

                    <div class="therapist4">
                        <h5>{{$doctor->name}}</h5>
                        <h6>{{$doctor->degree}}</h6>
                        <div class="review">
                            <div class="rating rating1">
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>

                            </div>
                            <p>( 320 )</p>

                        </div>
                    </div>
                    <a href="{{route('therapist.like',$doctor->id)}}" class="btn3">
                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i></a>



                </div>
                <div class="type">
                    <p class="para1">Abuse</p>
                    <p class="para2">PTSD</p>
                    <p class="para3">Depression</p>
                    <p class="para4">+3</p>
                </div>

                <a href="{{route('therapist.show',$doctor->id)}}" class="booking">Go To Profile</a>
                <a href="#" class="msgg">
                    <i class="fa-solid fa-message msg1"></i>
                    <i class="fa-regular fa-message msg2"></i>
                </a>
            </div>

        @endforeach
    </div>
    <div class="therapist">

    </div>
    <div class="therapist2">
        @foreach($doctorsdiv2 as $doctor)


            <div class="therapist3">

                <div class="therapist5">

                    <a href="{{route('therapist.show',$doctor->id)}}">
                        <img src="{{asset('storage/images/doctors/'.$doctor->img)}}"/>
                    </a>

                    <div class="therapist4">
                        <h5> {{$doctor->name}}</h5>
                        <h6>{{$doctor->degree}}</h6>
                        <div class="review">
                            <div class="rating rating1">
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>
                                <i class="fa-regular fa-star star1"></i>

                            </div>
                            <p>( 320 )</p>

                        </div>
                    </div>
                    <a href="{{route('therapist.like',$doctor->id)}}" class="btn3">
                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i></a>



                </div>
                <div class="type">
                    <p class="para1">Abuse</p>
                    <p class="para2">PTSD</p>
                    <p class="para3">Depression</p>
                    <p class="para4">+3</p>
                </div>

                <a href="{{route('therapist.show',$doctor->id)}}" class="booking">Go To Profile</a>

                <a href="#" class="msgg">
                    <i class="fa-solid fa-message msg1"></i>
                    <i class="fa-regular fa-message msg2"></i>
                </a>
            </div>

        @endforeach
    </div>

    <div class="therapist">
        <h2>Recommended for you </h2>
        <a href="#" class="see">See All <i class="fa-solid fa-greater-than"></i></a>
    </div>

    <div class="therapist2">

        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/customer-6.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Maria Younis</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating7">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>



        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/steve.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Ramy Mohamed</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating8">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>




        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/hannah.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Mai Badr</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating9">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>
    </div>

    <div class="therapist">

    </div>

    <div class="therapist2">

        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/Angelina_Jolie.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Diana Peter</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating10">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>



        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/customer-3.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Amira Assad</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating11">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>




        <div class="therapist3">
            <div class="therapist5">
                <img src="{{asset('site/images/customer-5.jpg')}}" alt="customer-6">

                <div class="therapist4">
                    <h5>Dr. Ahmed Ezz</h5>
                    <h6>PHD,Behavioral Phychology</h6>


                    <div class="review">

                        <div class="rating rating12">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>
                        <p>( 320 )</p>

                    </div>
                </div>
                <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>
            </div>
            <div class="type">
                <p class="para1">Abuse</p>
                <p class="para2">PTSD</p>
                <p class="para3">Depression</p>
                <p class="para4">+3</p>
            </div>

            <a href="#" class="booking">Go To Profile</a>
            <a href="#" class="msgg">
                <i class="fa-solid fa-message msg1"></i>
                <i class="fa-regular fa-message msg2"></i>
            </a>

        </div>
    </div>



</section>

<!--end therapists section-->



<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Therapist.js')}}"></script>

</section>

<!--end therapists section-->

@include("layouts.site.user.adult.inc.footer")




@if(session('status'))
    <script>
        swal({{ session('status') }});
    </script>
@endif

</body>

</html>
