<div wire:poll="refreshMessages">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <!-- msg-header section starts -->
                <div class="msg-header">
                    <div class="container1">

                        <div class="active">
                            @foreach($chats as $chat)
                                <h2>{{$chat->name}}</h2>
                                <div class="avatars">
                                <span class="avatar">
                                    @foreach($chat->users()->where('users.id','<>',Auth::user()->id)->get() as $user)

                                        <img src="{{asset('storage/images/users/'.$user['img'])}}" alt="image24">
                                    @endforeach
                                </span>
                                    <!-- Variable amount more avatars -->
                                </div>
                            @endforeach


                        </div>

                        <div class="call">
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
                            <div class="pho1"><i class="fa-solid fa-phone closepopup2" id="resetTimer1"></i>
                            </div>
                            <div class="toggle1"><i class="fa-solid fa-microphone"></i></div>
                        </div>
                        <div class="timerDisplay1">
                            00 : 00 : 00 : 000
                        </div>
                    </div>
                </div>



                <!-- msg-header section ends -->

                <!-- Chat inbox  -->
                <div class="chat-page">
                    <div class="msg-inbox">
                        <div class="chats">

                            <!-- Message container -->
                            <div class="msg-page">
                                @foreach($activechat->messages->sortBy('created_at') as $message)
                                    <!--AuthrnticatedUsers messages-->
                                    @if($message->isAuthrnticatedUsers())
                                        <div class="outgoing-chats">
                                            <div class="outgoing-chats-img">
                                                <img src="{{asset('storage/images/users/'.$message->user->img)}}">

                                            </div>
                                            <div class="outgoing-msg">
                                                <div class="outgoing-chats-msg">
                                                    <h4>{{$message->user->name}}</h4>
                                                    <p >{{$message->message}}</p>


                                                    <span class="time">{{$message->getReadableCreatedAt()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- unAuthrnticated Users messages-->
                                    @else
                                        <div class="received-chats2">
                                            <div class="received-chats">
                                                <div class="received-chats-img">
                                                    <img src="{{asset('storage/images/users/'.$message->user->img)}}">

                                                </div>
                                                <div class="received-msg">
                                                    <div class="received-msg-inbox">
                                                        <h4>{{$message->user->name}}</h4>
                                                        <p>{{$message->message}}</p>
                                                        <span class="time">{{$message->getReadableCreatedAt()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- Incoming messages -->









                            </div>
                        </div>

                        <!-- msg-bottom section -->


                        <div class="msg-bottom">
                            <div class="input-group">
                                <form wire:submit.prevent="sendMessage">
                             <div class="text-btn">
                                    <textarea type="text" class="form-control" style="outline: 0" placeholder="Write message..." wire:model="message"  ></textarea>
                                    <button class="input-group-text send-icon" type="submit">
                                        <i class="fa-regular fa-paper-plane"></i></button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--end-col-8-->

            <div class="col-4">
                <div>
                    <h2>Group Member</h2>

                    <div class="users">
                        @foreach($chats as $chat)
                            @foreach($chat->users()->where('users.id','<>',Auth::user()->id)->get() as $user)
                           <div class="user-1">
                             <img src="{{asset('storage/images/users/'.$user['img'])}}" alt="image24">
                             <p>{{$user->name}}</p>
                           <div class="toggle3 tog" style="position: relative; left: 10.5rem;"></div>
                           </div>

                            @endforeach
                        @endforeach
                    </div>








                </div>
            </div><!--end-col-4-->

        </div>
    </div>

</div>
