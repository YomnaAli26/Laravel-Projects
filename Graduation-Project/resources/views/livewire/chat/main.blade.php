<div>
    @section("content")

    <div class="container">
        <div id="defaultchat1" class="row show">
            <div class="col-4 all">
                <div class="people">

                    <div class="dr">
                        <img src="{{asset("storage/images/users/".\Illuminate\Support\Facades\Auth::user()->img)}}">
                        <h3>{{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                    </div>
            @livewire('chat.chatlist')
                </div>
            </div>
            <div class="col-8">
                <!-- msg-header section starts -->

                <div class="msg-header">
                    <div class="container1">

                        <div class="active1 ">
                            <h2>Chat</h2>
                        </div>
                        <div class="call">
                            <div class="tooltip">
                                <a href="#"><img src="{{asset('site/images/68.jpg')}}"></a>
                                <span class="tooltiptext">Prescription</span>
                            </div>
                            <i class="fa-solid fa-phone openphone1" id="startTimer"></i>
                            <i class="fa-solid fa-video openphone2 startTimer" id="startTimer1"></i>
                        </div>
                    </div>
                </div>


                <div class="overlay">
                    <div class="popup">
                        <div class="icon1">
                            <div class="pho"><i class="fa-solid fa-phone closepopup1" id="resetTimer"></i></div>
                            <div class="toggle"><i class="fa-solid fa-microphone"></i></div>
                        </div>
                        <div class="timerDisplay">
                            00 : 00 : 00 : 000
                        </div>
                    </div>
                </div>

                <div class="overlay1">
                    <div class="popup1">
                        <img src="../images/22.jpg" alt="22image">
                        <div class="icon2">
                            <div class="pho1"><i class="fa-solid fa-phone closepopup2" id="resetTimer1"></i></div>
                            <div class="toggle1"><i class="fa-solid fa-microphone"></i></div>
                        </div>
                        <div class="timerDisplay1">
                            00 : 00 : 00 : 000
                        </div>
                    </div>
                </div>


                <!-- msg-header section ends -->


                <!-- Chat inbox  -->
                @livewire('chat.chatbox')

            </div><!--end-col-8-->


        </div><!--end row-->
    </div><!--end container-->
    @endsection
</div>

