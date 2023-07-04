@extends('layouts.site.user.adult.master')
@section('title')
    Article
@endsection
@section('content')
    <section class="container">
        <div class="first">
            <h1>{{$article->desc}} </h1>
            <div class="child">
                <div class="second">
                   @foreach(\App\Models\rateArticle::where("article_id",$article->id)->pluck("rate") as $rate )
                        @for($i=1; $i<=$rate;$i++)
                        <i class="fa-solid fa-star star1"></i>
                        @endfor
                    @endforeach

              </div>
        </div>
            <div class="add">
                <form method="post" action="{{url("site/add-rate",$article->id)}}">
                    @csrf
                    <select name="rate" id="rate" class="rate">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit"  value="Add Rate">
                </form>
            </div>

        </div>
            <img src="{{asset('/storage/images/articles/'.$article->img)}}" class="midimg" alt="image16" >

            <div class="txt">
                <h3>{{$article->desc}}</h3>
                <p>{{$article->content}}
                </p>
                <br><br>

            </div>
        </div>
    </section>
@endsection

