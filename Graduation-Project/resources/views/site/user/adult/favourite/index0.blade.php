@extends('layouts.site.user.adult.master')
@section('title')
    Favourite
@endsection
@section('content')
    <section class="favourite">

        <h1>Favourite</h1>
        <h2 style="font-size: 25px;">Therapists</h2>

        <div class="favourite1" style="margin-left: -1.7rem;">
            @foreach($doctors as $doctor)
            <div class="therapists">
                <a href="#"><img src="{{asset('storage/images/doctors/'.$doctor['img'])}}"/></a>
                <div class="txt">
                    <h3>Dr. {{$doctor->name}}</h3>
                    <p>{{$doctor->degree}}</p>

                    <div class="review">

                        <div class="rating rating1">

                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>
                            <i class="fa-regular fa-star star1"></i>

                        </div>

                        <a href="{{route('therapist.like',$doctor->id)}}" class="btn3"><i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i></a>

                    </div>
                    <h2>(320)</h2>
                </div>
            </div>
            @endforeach
        </div>
        <div class="poadcast">

            <h2>Poadcast</h2>

            <div class="poadcast3">
                @foreach($podcasts as $podcast)
                <div class="poadcast1" style="margin-left: 5.8rem;">

                    <a href="#"><img src="{{asset("storage/images/podcasts/".$podcast->img)}}" alt="image51"></a>

                    <div class="txt">

                        <h3>{{$podcast->name}}</h3>

                        <div class="poadcast2">
                            <p>Poadcast</p>
                            <a class="btn3"><i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>







    </section>

@endsection










{{--        <!--end poadcat section-->--}}

{{--        <!--start article section-->--}}

{{--        <h2 class="article" style="font-size: 26.5px;">Article</h2>--}}


{{--        <div class="article2">--}}



{{--            <div class="poadcast1" style="margin-left: 6.5rem;">--}}

{{--                <a href="#"><img src="{{asset("site/images/16.jpg")}}" alt="image16"></a>--}}

{{--                <div class="txt">--}}

{{--                    <h3>What is Social Media <br> Addiction ?</h3>--}}

{{--                    <div class="poadcast2">--}}
{{--                        <p>Article</p>--}}
{{--                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}




{{--            <div class="poadcast1" style="margin-left: 6.2rem;">--}}

{{--                <a href="#"><img src="{{asset("site/images/16.jpg")}}" alt="image16"></a>--}}

{{--                <div class="txt">--}}

{{--                    <h3>What is Social Media <br> Addiction ?</h3>--}}

{{--                    <div class="poadcast2">--}}
{{--                        <p>Article</p>--}}
{{--                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}




{{--            <div class="poadcast1" style="margin-left: 6.3rem;">--}}

{{--                <a href="#"><img src="{{asset("site/images/16.jpg")}}" alt="image16"></a>--}}

{{--                <div class="txt">--}}

{{--                    <h3>What is Social Media <br> Addiction ?</h3>--}}

{{--                    <div class="poadcast2">--}}
{{--                        <p>Article</p>--}}
{{--                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}





{{--            <div class="poadcast1" style="margin-left: 6rem;">--}}

{{--                <a href="#"><img src="{{asset("site/images/16.jpg")}}" alt="image16"></a>--}}

{{--                <div class="txt">--}}

{{--                    <h3>What is Social Media <br> Addiction ?</h3>--}}

{{--                    <div class="poadcast2">--}}
{{--                        <p>Article</p>--}}
{{--                        <i class="fa-regular fa-heart heart" onclick="fillHeart(this)"></i>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}



{{--        </div>--}}

{{--    </div>--}}
{{--    </div>--}}
{{--</section>--}}
