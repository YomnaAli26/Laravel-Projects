<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="{{asset('site/images/logo-transparent.png')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{asset('site/css/Home.css')}}">


    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
        chat-icon="https:&#x2F;&#x2F;i.ibb.co&#x2F;82jXC7N&#x2F;photo-2023-06-02-19-35-57.jpg"
        intent="WELCOME"
        chat-title="Relife"
        agent-id="e79754ed-1e34-4a14-aad4-33b6b9f2f0bb"
        language-code="en"
    ></df-messenger>
    <style>
        df-messenger {
            --df-messenger-bot-message: #ad6ce0;
            --df-messenger-user-message: #ad6ce0;
            --df-messenger-button-titlebar-color:  white;
            --df-messenger-button-titlebar-font-color: #ad6ce0;
            --df-messenger-chat-background-color: #F3F3F3;
            --df-messenger-font-color: white;
            --df-messenger-send-icon: #6B75D2;
            --df-messenger-chip-border-color: #6B75D2;
            --df-messenger-input-box-color: white;
            --df-messenger-input-font-color: black;
            --df-messenger-input-placeholder-font-color: #BAB3BF;
            --df-messenger-minimized-chat-close-icon-color: #E3E9FB;
        }
    </style>
    <script src="//code.tidio.co/rb9oblsxexywambkt4r6msyfoscar6kv.js" async></script>
</head>

<body>
@include("layouts.site.user.adult.inc.navbar")

    <section class="container">
        <div class="overlay">
            <div class="popup">
                <h3 class="head20">How are you feeling today ?</h3>
                <div class="btns">

                    <img src="{{asset("site/images/72.jpg")}}"  data-mark="happy" class="active">
                    <img src="{{asset("site/images/69.jpg")}}" data-mark="fine" class="fine">
                    <img src="{{asset("site/images/71.jpg")}}" data-mark="stressed" >
                    <img src="{{asset("site/images/73.jpg")}}" data-mark="angry" class="angry">
                    <img src="{{asset("site/images/70.jpg")}} "data-mark="sad">
                </div>
                <div class="emotion" >
                    <p  class="happy">Happy</p>
                    <p  class="fine1">Fine</p>
                    <p class="stressed">Stressed</p>
                    <p class="angry">Angry</p>
                    <p class="sad">Sad</p>

                </div>

                <h2 class="quate">Message of today</h2>

                <div class="content">

                    <div id="default" class="show"></div>
                    <div id="happy" ><img src="{{asset("site/images/82.jpeg")}}"></div>
                    <div id="fine"><img src="{{asset("site/images/76.jpeg")}}"></div>
                    <div id="stressed"><img src="{{asset("site/images/79.jpeg")}}"></div>
                    <div id="angry" ><img src="{{asset("site/images/78.jpeg")}}"></div>
                    <div id="sad" ><img src="{{asset("site/images/74.jpeg")}}"></div>

                </div>

                <button class="closeBtn">Continue</button>
            </div>
        </div>

        <section class="head1">
            <div class="head2">
                <h4 class="head3">THE RICHT CHOICE</h4>
                <h1 class="head4"> Free Online <br>
                    <span> Therapy and Counselling <br>
                        Sessions </span> For All
                </h1>
                <p>We are here for your care. your health is our first piriority so <br>
                    We are ready to help you with your health consultation.
                </p>

                <div class="head9">
                    <h2 class="head6">Get Started</h2>

                </div>

            </div>


            <div class="head5">
                <img src="{{asset("site/images/mask group.png")}}">
            </div>

        </section>

        <!--end head section-->


        <!--start services section-->

        <h2 class="services1"> Our <span style="color: #ad6ce0;"> Services </span></h2>

        <div class="services2">
            <a href="#" class="anchorr">
                <div class="services3">
                    <img src="{{asset("site/images/47.png")}}" alt="image47">
                    <h2>Chatbot</h2>
                    <p>Diagnosis chatbot will help you to know if you are addicted or not</p>
                </div>
            </a>
            <a href="{{route("therapist.index")}}" class="anchorr">
                <div class="services4">
                    <img src="{{asset("site/images/50.jpeg")}}" alt="image50">
                    <h2>Therapists</h2>
                    <p>find best therapists to help you solve your problems</p>
                </div>
            </a>
            <a href="#" class="anchorr">
                <div class="services5">
                    <img src="{{asset("site/images/48.jfif")}}" alt="image48">
                    <h2>Online Consultation</h2>
                    <p>consult doctors online for any health concern</p>
                </div>
            </a>
            <a href="#" class="anchorr">
                <div class="services6">
                    <img src="{{asset("site/images/49.png")}}" alt="image49">
                    <h2>Selfcare</h2>
                    <p>provide you with Proadcasts, meditation,articles,sport and selfcare</p>
                </div>
            </a>
        </div>

        <!--recommend section-->

        <div class="recommend" style="margin-bottom: 20px; ">
            <h2>Recommended for you </h2>
        </div>

        <div class="recommend2">
            <div>
                <img src="{{asset("site/images/32.jpg")}}" alt="image32">
                <h6>Relax your Mind</h6>
                <p>Relaxtition &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (5 Sessions)</p>
            </div>
            <div>
                <img src="{{asset("site/images/52.jpg")}}" alt="image52">
                <h6>Relax your Mind</h6>
                <p>Relaxtition &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (5 Sessions)</p>
            </div>
            <div>
                <img src="{{asset("site/images/53.jpg")}}" alt="image53">
                <h6>Relax your Mind</h6>
                <p>Relaxtition &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (5 Sessions)</p>
            </div>
            <div>
                <img src="{{asset("site/images/54.jpg")}}" alt="image54">
                <h6>Relax your Mind</h6>
                <p>Relaxtition &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (5 Sessions)</p>
            </div>
        </div>

        <!--featured poadcast section-->

        <div class="poadcast">
            <h2 style="margin-bottom: 20px;">Featured Poadcast </h2>

        </div>
        <div class="poadcast2">
            @foreach($podcasts as $podcast)
                <div>
                    <video src="{{asset('storage/videos/podcasts/'.$podcast->video)}}" controls poster="{{asset('storage/images/podcasts/'.$podcast->img)}}" height="auto" width="100%"
                           style="cursor: pointer;"></video>
                    <a href="{{route('podcast.show',$podcast->id)}}">{{$podcast->name}}</a>
                    <p>poadcast &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (5 Sessions)</p>


                </div>
            @endforeach
        </div>

        <!--featured articles section-->

        <div class="article">
            <h2>Featured Articles </h2>

        </div>

        <div>
            <div class="article2">
                @foreach($articles as $article)
                    <div class="article6">



                        <img src="{{asset('/storage/images/articles/'.$article->img)}}" alt="image57">
                        <div class="article3">
                            <i class="fa-regular fa-clock "></i>
                            <h6>10 to 20 min read</h6>
                        </div>
                        <h5 class="head10">{{$article->desc}}</h5>
                        <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>


                        <a href="{{route('article.show',$article->id)}}">More Details...</a>
                        <div class="article5">
                            <i class="fa-regular fa-calendar-days"></i>
                            <h6>{{$article->created_at}}</h6>
                        </div>


                    </div>
                @endforeach
            </div>


        <!--start therapists section-->


        <div class="therapist">
            <h2>Therapists </h2>
        </div>


            <div class="therapist2">

                @foreach($doctors as $doctor)

                    <div class="therapist3">
                        <div class="therapist5">
                            <a href="{{route('therapist.show',$doctor->id)}}">
                                <img src="{{asset('storage/images/doctors/'.$doctor->img)}}"/>
                            </a>
                            <div class="therapist4">

                                    <h5>Dr. {{$doctor->name}}</h5>
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
                        <div class="ddd">
                             <a href="{{route('therapist.like',$doctor->id)}}" class="btn3"><i class="fa-regular fa-heart heart" onclick="@if($doctor->favoriteUsers->favourite = 1)fillHeart(this)"@endif></i></a>

                        </div>

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

        <!--end therapists section-->

        <!--start live section-->

        <h1 class="live">Group Discussion On Going</h1>
        <div class="live1">
            <a href="#" class="live2">
                <div class="live3">
                    <i class="fa-solid fa-circle"></i>
                    <h4>live</h4>
                </div>

                <h2>Topic</h2>
                <p>Social Media Addiction</p>

                <h5>By Tulip Omar</h5>

                <div class="avatars">
                    <span class="avatar">
                        <img src="{{asset("site/images/25.jpg")}}">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/29.jpg")}}" style="position: relative; right: .4rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/22.jpg")}}" style="position: relative; right: .8rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/5.jpg")}}" style="position: relative; left: -1.3rem;">
                    </span>
                    <span class="avatar">
                        <button>+20</button>
                    </span>
                    <!-- Variable amount more avatars -->
                </div>

            </a>

            <a href="#" class="live2" style="background-color: rgb(190, 239, 255);">
                <div class="live3">
                    <i class="fa-solid fa-circle"></i>
                    <h4>live</h4>
                </div>

                <h2>Topic</h2>
                <p>Plastic Surgery Addiction</p>

                <h5>By Tulip Omar</h5>

                <div class="avatars">
                    <span class="avatar">
                        <img src="{{asset("site/images/25.jpg")}}">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/29.jpg")}}" style="position: relative; right: .4rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/22.jpg")}}" style="position: relative; right: .8rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/5.jpg")}}" style="position: relative; left: -1.3rem;">
                    </span>
                    <span class="avatar">
                        <button>+20</button>
                    </span>
                    <!-- Variable amount more avatars -->
                </div>

            </a>

            <a href="#" class="live2" style="background-color:rgb(251, 251, 179);">


                <div class="live3">
                    <i class="fa-solid fa-circle"></i>
                    <h4>live</h4>
                </div>

                <h2>Topic</h2>
                <p>Video Games Addiction</p>

                <h5>By Tulip Omar</h5>

                <div class="avatars">
                    <span class="avatar">
                        <img src="{{asset("site/images/25.jpg")}}">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/29.jpg")}}" style="position: relative; right: .4rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/22.jpg")}}" style="position: relative; right: .8rem;">
                    </span>
                    <span class="avatar">
                        <img src="{{asset("site/images/5.jpg")}}" style="position: relative; left: -1.3rem;">
                    </span>
                    <span class="avatar">
                        <button>+20</button>
                    </span>
                    <!-- Variable amount more avatars -->
                </div>

            </a>

        </div>
        <!--end live section-->

        <!--start users section-->

        <h1 class="user">Reviews From Our <span style="color: #ad6ce0; font-size: 30px;">Users</span></h1>


        <div class="user1">
            <div class="user14">

                <div class="user2">
                    <div class="user3" style="position: relative; left: .8rem;">
                        <span class="span1">"</span>
                        <p>

                            very glad with relife service. good health care<br>
                            allow quick and easy search. thanks relife<br>
                            for making it simple.

                        </p><span class="span2">"</span>

                        <div class="user5">
                            <div class="user6">
                                <h2>Mariam Ahmed</h2>
                                <div class="review">

                                    <div class="rating rating4">

                                        <i class="fa-solid fa-star star1"></i>
                                        <i class="fa-solid fa-star star1"></i>
                                        <i class="fa-solid fa-star star1"></i>
                                        <i class="fa-solid fa-star star1"></i>
                                        <i class="fa-solid fa-star star1"></i>

                                    </div>
                                    <p>(4.8)</p>

                                </div>
                            </div>

                            <img src="{{asset("site/images/22.jpg")}}" alt="image22">
                        </div>
                    </div>



                    <div class="user2">
                        <div class="user3" style="position: relative; right: .8rem;">
                            <span class="span1">"</span>
                            <p>

                                very glad with relife service. good health care<br>
                                allow quick and easy search. thanks relife<br>
                                for making it simple.

                            </p><span class="span2">"</span>

                            <div class="user5">
                                <div class="user6">
                                    <h2>Selim Sayed</h2>
                                    <div class="review">

                                        <div class="rating rating4">

                                            <i class="fa-solid fa-star star1"></i>
                                            <i class="fa-solid fa-star star1"></i>
                                            <i class="fa-solid fa-star star1"></i>
                                            <i class="fa-solid fa-star star1"></i>
                                            <i class="fa-solid fa-star star1"></i>

                                        </div>
                                        <p>(4.8)</p>

                                    </div>
                                </div>

                                <img src="{{asset("site/images/35.jpg")}}" alt="image35">
                            </div>
                        </div>
                    </div>



                    <div class="user15">
                        <div class="user8" style="position: relative; top:  -1rem;">
                            <div class="user9" style="position: relative; right: 2rem;">
                                <span class="span3">"</span>
                                <p>
                                    very glad with relife service. good health care<br>
                                    allow quick and easy search. thanks relife<br>
                                    for making it simple.

                                </p>
                                <span class="span4">"</span>

                                <div class="user10">
                                    <div class="user13">
                                        <h2>Omar Eissa</h2>
                                        <div class="review">

                                            <div class="rating rating4">

                                                <i class="fa-solid fa-star star1"></i>
                                                <i class="fa-solid fa-star star1"></i>
                                                <i class="fa-solid fa-star star1"></i>
                                                <i class="fa-solid fa-star star1"></i>
                                                <i class="fa-solid fa-star star1"></i>

                                            </div>
                                            <p>(4.8)</p>

                                        </div>
                                    </div>

                                    <img src="{{asset("site/images/21.jpeg")}}" alt="image21">
                                </div>
                            </div>



                            <div class="user8">
                                <div class="user9" style="position: relative; left: 2rem;">
                                    <span class="span3">"</span>
                                    <p>
                                        very glad with relife service. good health care<br>
                                        allow quick and easy search. thanks relife<br>
                                        for making it simple.

                                    </p>
                                    <span class="span4">"</span>

                                    <div class="user10">
                                        <div class="user13">
                                            <h2>Mai Abdelrahman</h2>
                                            <div class="review">

                                                <div class="rating rating4">

                                                    <i class="fa-solid fa-star star1"></i>
                                                    <i class="fa-solid fa-star star1"></i>
                                                    <i class="fa-solid fa-star star1"></i>
                                                    <i class="fa-solid fa-star star1"></i>
                                                    <i class="fa-solid fa-star star1"></i>

                                                </div>
                                                <p>(4.8)</p>

                                            </div>
                                        </div>

                                        <img src="{{asset("site/images/25.jpg")}}" alt="image25">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer>
    <div class="fpart">
        <img src="{{asset("site/images/logo.jpg")}}" height="60px" width="54px">
        <p>Help yourself with us<br>with best chatbot, therapists and<br> better selfcare
        </p>
        <p>Mansoura, AhmedMaherstreet</p>
        <a href="#" ><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#" id="left"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="#" id="left" ><i class="fa-brands fa-linkedin"></i></a>

    </div>
    <div class="spart" >
        <h2>Categories</h2>
        <ul>
            <li><a href="#">Therapists</a></li>
            <li><a href="#">Selfcare</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Chatbot</a></li>
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
            <p><i class="fa-regular fa-envelope"></i> Contact@gmail.com</p>

        </div>
    </div>
</footer>
<script src="{{asset('site/js/main.js')}}"></script>
<script src="{{asset('site/js/Home.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
        swal({{session('status')}});
    </script>
@endif
</body>
</html>
