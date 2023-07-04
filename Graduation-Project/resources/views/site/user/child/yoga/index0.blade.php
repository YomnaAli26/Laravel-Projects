@extends("layouts.site.user.child.master")
@section("title")
    Child_Yoga
@endsection
@section("content")
    <section class="container podcast">
        <!-- firdiv -->
        <div class="recommend">
            <h2>Recommended for you</h2>
</br>
        </div>

        <div class="secdiv">
            @foreach($yoga as $session)
            <div class="vid">

                <a href="{{route('child.yoga.show',$session->id)}}" style="text-decoration: none;">
                    <img src="{{asset('storage/images/yoga/'.$session->img)}}" height="auto" width="100%" style="cursor: pointer;"></a>
                <h4>{{$session->title}}</h4>
                <h5>yoga </h5>
                <h5>{{$session->created_at}}</h5>

            </div>
            @endforeach
        </div>
        <!-- end sec div -->

        <!-- start third div -->
        <div class="latest">
            <h2>Lastest Yoga</h2>

        </div>
        <div class="thirddiv">
            @foreach($yogo as $session)
            <div class="vid">
                <a href="{{route('child.yoga.show',$session->id)}}" style="text-decoration: none;">
                    <img src="{{asset('storage/images/yoga/'.$session->img)}}" height="auto" width="100%" style="cursor: pointer;"></a>
                <h4>{{$session->title}}</h4>
                <h5>yoga </h5><br>
                <h5>{{$session->created_at}}</h5>


            </div>
            @endforeach
        </div>
        <!-- end third div -->
    </section>
@endsection
