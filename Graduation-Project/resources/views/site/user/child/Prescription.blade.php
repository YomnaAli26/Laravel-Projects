@extends('layouts.site.user.child.master')
@section('content')

<section class="container">

<div class="info1">
    <h1>Prescription</h1>

    <div class="info2">
        <img src="{{asset('storage/images/users/'.\Illuminate\Support\Facades\Auth::user()->img)}}" >

        <div class="patient_info">
            <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
            <h3>{{\Illuminate\Support\Facades\Auth::user()->DateOfBirth}}</h3>
            <h4>{{\Illuminate\Support\Facades\Auth::user()->email}}</h4>
        </div>
    </div>
</div>

      
@foreach($prescriptions as $prescription)
<div class="slideshow-container">

<!-- Full-width slides-->
<div>

    <div class="mySlides">
    
        <div class="date">
            <h3 class="session_date">Session Date</h3>
            <p class="date2">{{$prescription->created_at->format('d,M,Y')}}</p>
        </div>
        <div>
            <h3 class="diagn">Diagnosis</h3>
            <div class="diagn1">
                <p class="diagnosis">{{$prescription->content}}</p>
            </div>
        </div>

        <div>

            <h3 class="treat">Plan of treatment</h3>
            
            <div style="display: flex;" class="treatment">
           
                <ul class="treat1 treatment1">
                @foreach($prescriptions as $prescript)
                    <li>{{$prescript->planoftreatment}}</li>
                    @endforeach 
                </ul>
            
            </div>
      
        </div>
        
    </div>
</div>




<!-- Next/prev buttons -->
<a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-chevron-left"></i></a>
<a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-chevron-right"></i></a>
</div>
@endforeach
<!-- Dots/bullets/indicators -->
<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>


</section>

@endsection