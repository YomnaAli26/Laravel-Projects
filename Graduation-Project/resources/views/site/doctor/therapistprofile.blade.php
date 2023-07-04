<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapist Profile</title>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/Therapist Profile for Therapist.css')}}">
    <script src="{{asset('site/js/sweetalert.min.js')}}"></script>

</head>

<body>

<!--start navbar-->
@include('sweet::alert')

@include('layouts.site.doctor.inc.navbar')
<!--end navbar-->



<section class="container">
    <div class="row">

        <div class="col-3">
            <div class="first">
                <img src="{{asset('storage/images/doctors/'.$doctor->img)}}" id="doc-pic">
                <h1>{{$doctor->name}}</h1>
                <h2>{{$doctor->degree}}</h2>
                <div class="rate_num">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p id="num">0.5</p>

                </div>

            </div>
        </div>

        <div class="col-9 sec">
            <div class="first-right">
                <div class="book">
                    <i class="fa-solid fa-bookmark" id="icons4"></i>
                    <h4>{{$doctor->experience}}<br>
                        <p id="exp">experience</p>
                    </h4>
                </div>

                <div class="book b2" style="margin-left: 30px;">
                    <i class="fa-solid fa-user-tie" id="icons4"></i>
                    <h4>1.500+<br>
                        <p id="exp">patient</p>
                    </h4>
                </div>

            </div>
            <div class="specialist ">
                <h3>Specialists</h3>
                <h4>Anxiety</h4>
                <h4 id="same">Stress</h4>
                <h4 id="same">Counseling</h4>
            </div>
            <div class="about">
                <h3>About</h3>
                <p id="disc">{{$doctor->about}}</a></p>
            </div>

            <div>
                <button id="create-group-therapy" class="openpopup3" >Create Group Therapy</button>
                <div class="overlay2">
                    <div class="popup2" id="popup3">
                        <form action="" method="">
                            <div class="div-name">
                                <label class="label-name" for="name">Group
                                    Name</label>
                                <input type="text" id="name" name="glname" class="enter-group-name"
                                       placeholder="Enter Group Name">
                            </div>
                            <div class="personsss">
                                <div class="join">
                                    <img src="../images/customer-4.jpg">
                                    <p>Admin</p>
                                    <button style="position: relative; ;left:10.25rem;">Join Admin</button>
                                </div>
                                <div class="join">
                                    <img src="../images/35.jpg">
                                    <p>Amr Asaad</p>
                                    <button style="position: relative; ;left:8rem;">Join Amr Asaad</button>
                                </div>
                                <div class="join">
                                    <img src="../images/25.jpg">
                                    <p>Nour Ahmed</p>
                                    <button style="position: relative; ;left:7.3rem;">Join Nour
                                        Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/5.jpg">
                                    <p>Omar Ahmed</p>
                                    <button style="position: relative; ;left:7rem;">Join Omar
                                        Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/29.jpg">
                                    <p>Khaled Zain</p>
                                    <button style="position: relative; ;left:7.6rem;">Join Khaled
                                        Zain</button>
                                </div>
                                <div class="join">
                                    <img src="../images/21.jpeg">
                                    <p>Seif Mousa</p>
                                    <button style="position: relative; ;left:7.9rem;">Join Seif
                                        Mousa</button>
                                </div>
                                <div class="join">
                                    <img src="../images/24.jpg">
                                    <p>Mariam Ali</p>
                                    <button style="position: relative; ;left:8.1rem;">Join Mariam
                                        Ali</button>
                                </div>
                                <div class="join">
                                    <img src="../images/35.jpg">
                                    <p>Amr Asaad</p>
                                    <button style="position: relative; ;left:8rem;">Join Amr
                                        Asaad</button>
                                </div>
                                <div class="join">
                                    <img src="../images/25.jpg">
                                    <p>Nour Ahmed</p>
                                    <button style="position: relative; ;left:7.3rem;">Join Nour Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/5.jpg">
                                    <p>Omar Ahmed</p>
                                    <button style="position: relative; ;left:7.1rem;">Join Omar
                                        Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/29.jpg">
                                    <p>Khaled Zain</p>
                                    <button style="position: relative; ;left:7.7rem;">Join Khaled
                                        Zain</button>
                                </div>
                                <div class="join">
                                    <img src="../images/22.jpg">
                                    <p>Admin</p>
                                    <button style="position: relative; ;left:10.3rem;">Join Admin</button>
                                </div>
                                <div class="join">
                                    <img src="../images/35.jpg">
                                    <p>Amr Asaad</p>
                                    <button style="position: relative; ;left:8.1rem;">Join Amr Asaad</button>
                                </div>
                                <div class="join">
                                    <img src="../images/25.jpg">
                                    <p>Nour Ahmed</p>
                                    <button style="position: relative; ;left:7.5rem;">Join Nour
                                        Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/5.jpg">
                                    <p>Omar Ahmed</p>
                                    <button style="position: relative; ;left:7.3rem;">Join Omar
                                        Ahmed</button>
                                </div>
                                <div class="join">
                                    <img src="../images/29.jpg">
                                    <p>Khaled Zain</p>
                                    <button style="position: relative; ;left:7.9rem;">Join Khaled
                                        Zain</button>
                                </div>
                                <div class="join">
                                    <img src="../images/22.jpg">
                                    <p>Emily John</p>
                                    <button style="position: relative; ;left:8.3rem;">Join Emily
                                        John</button>
                                </div>
                            </div>

                            <div class="pop-btn">
                                <a href="{{route("chat")}}" class="create">Create</a>
                                <a href="#" id="details" class="closepopup3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>






        </div>

        <div class="posts">
            <h3>Posts</h3>
        </div>
        <form method="post" action="{{route('profile.store')}}">
            @csrf
            <div class="textarea">
                <label for="story"></label>
                <textarea id="story" name="content" rows="5" cols="33" placeholder="Write a post...">
                </textarea>
            </div>
            <div class="buttons">
                <button id="cancel">Cancel</button>
                <button id="send">Send</button>
            </div>
        </form>

        @foreach($Posts as $Post)
            <div class="tulip">
                <img src="{{asset('storage/images/doctors/'.$doctor->img)}}" alt="Avatar" class="avatar1">
                <div class="title">
                    <h3>{{$doctor['name']}} </br>
                        <p>{{$doctor['email']}}</p>
                    </h3>

                    <div class="right-icons">
                        <form action="{{route('post.destroy',$Post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button id="trash"><i class="fa-solid fa-trash"></i></button>
                            <i class="fa-solid fa-clock"></i>{{$Post->created_at->shortAbsoluteDiffForHumans()}}
                        </form>
                    </div>

                </div>


            </div>
            <div class="doc-post">
                <p id="ppos1">{{$Post['content']}}</p>

            </div>
            <div class="left-icons">
                <P id="like"> 2.7K <button><i class="fa-regular fa-thumbs-up"></i></button></P>

                <p id="comment"> 100K <button><i class="fa-regular fa-thumbs-down"></i></button></p>
            </div>
        @endforeach




        <div class="three-divs">
            <h1>Review</h1>
        </div>
        <div class="final-part">
            @foreach($reviews as $review)
                <div class="final-part1">
                    <img src="{{asset('storage/images/users/'.$review->User->img)}}" alt="Avatar" class="avatar2">
                    <div class="pic">

                        <h5>{{$review->User->name}}</br>
                            <p>{{$review->created_at->format('Y-m-d')}}</p>
                        </h5>




                    </div>
                    <p id="user"></br> {{$review->content}}</p>
                </div>







            @endforeach

        </div>
    </div>
</section>

<!--start footer-->

<footer>
    <div class="fpart">
        <img src="{{asset('site/images/logo.jpg')}}" height="60px" width="54px">
        <p>Help yourself with us<br>with best chatbot, therapists and<br> better selfcare
        </p>
        <p>Mansoura, AhmedMaherstreet</p>
        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-linkedin"></i></a>

    </div>
    <div class="spart">
        <h2>Categories</h2>
        <ul>
            <li><a href="#">Therapists</a></li>
            <li><a href="#">Materials</a></li>
            <li><a href="#">Favourite</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Chat</a></li>
        </ul>
    </div>
    <div class="tpart">
        <h2>Useful Links</h2>
        <ul>
            <li><a href="#">Terms Of Service</a></li>
            <li><a href="#">Your Account</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
    <div class="lpart">
        <h2>Stay Connected</h2>
        <div class="emailadd">

            <input type="email" id="email" name="email" placeholder="Enter Address">
            <button type="submit" class="tele"><i class="fa-regular fa-paper-plane "></i></button>

            <p><i class="fa-solid fa-phone"></i> Call +0109876567</p>
            <p><i class="fa-regular fa-envelope"></i> Contact@Relife.com</p>

        </div>
    </div>
</footer>


<!--end footer-->

<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Therapist Profile.js')}}"></script>

</body>

</html>
