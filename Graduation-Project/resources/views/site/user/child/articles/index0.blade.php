@extends("layouts.site.user.child.master")
@section("title")
    Articles
@endsection
@section("content")
    <Section class="container">
        <section class="first-part">
            <p id="first-phase">Here is information about your activity and mental condition.</p>
            <p id="second-phase">How to relieve stress. how to be patient.you will find every <span>Article</span> here!
            </p>
            <!--<form>
<input type="search" name="search"placeholder="Search article">

</form>-->
            <form class="nosubmit" method="get" action="{{route('article.search')}}">
                <input class="nosubmit" type="search" placeholder="Search article" name="query">
            </form>
        </section>

        <!--featured articles section-->

        <div class="article">
            <h2>Recommended for you </h2>

        </div>

        <div class="article2">
            <div class="article6">
                <img src="{{asset('site/images/food1.jpg')}}" alt="image16">
                <div class="article3">
                    <i class=" fa-regular fa-clock "></i>
                    <h6> 10 to 20 min read </h6>
                </div>
                <h5 class="head10">What is Food Addiction</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>
                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>

                <a href="">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food3.jpg')}}" alt="image56">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">Food Addiction: Causes and Treatments</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food6.jpg')}}" alt="image55">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">Food addiction: 5 signs & how to beat it </h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food7.jpg')}}" alt="image57">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">8 Common Symptoms of Food Addiction</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


        </div>
        <!--featured articles section-->

        <div class="article">
            <!--<h2>Recommended for you</h2>-
    <a href="#">See All <i class="fa-solid fa-greater-than"></i></a>-->
        </div>

        <div class="article2">
            <div class="article6">
                <img src="{{asset('site/images/food4.jpg')}}" alt="image16">
                <div class="article3">
                    <i class=" fa-regular fa-clock "></i>
                    <h6> 10 to 20 min read </h6>
                </div>
                <h5 class="head10">Food Addiction: Is It Real? Symptoms, Causes, and Coping Tips</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food2.jpg')}}" alt="image56">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">Why Are Certain Foods so Addictive?</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food5.jpg')}}" alt="image55">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">What Causes Food Addiction and What Are the Signs?</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


            <div class="article6">
                <img src="{{asset('site/images/food8.jpg')}}" alt="image57">
                <div class="article3">
                    <i class="fa-regular fa-clock "></i>
                    <h6>10 to 20 min read</h6>
                </div>
                <h5 class="head10">
                    Is Food Addiction A Real Addiction?</h5>
                <h6 class="head11">How to change your prespective on yourself <br> and your problems</h6>

                <div class="article4">
                    <img src="../images/steve.jpg">

                    <div>
                        <h5 class="create1">created by</h5>
                        <h6 class="create2">Rami Muhamed</h6>
                    </div>
                </div>
                <a href="#">More Details...</a>
                <div class="article5">
                    <i class="fa-regular fa-calendar-days"></i>
                    <h6>Published - 5 November 2022</h6>
                </div>
            </div>


        </div>
        <!--featured articles section-->

        <div class="article">
            <h2>Latest Articles </h2>
        </div>




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


                    <a href="{{route('child.article.show',$article->id)}}">More Details...</a>
                    <div class="article5">
                        <i class="fa-regular fa-calendar-days"></i>
                        <h6>{{$article->created_at}}</h6>
                    </div>


                </div>
            @endforeach
        </div>



        </div>
    </Section>


@endsection
