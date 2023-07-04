<div>


    <div class="chat-page">
        <div class="msg-inbox">
            <div class="chats">

                <!-- Message container -->
                <div class="msg-page" >
                    @if($selectedConversation)
                        @foreach($messages as $message)
                            <div wire:key='{{$message->id}}' class="{{auth()->id() == $message->sender_id?'received-chats':'outgoing-chats-img'}}" >
                                <div class="received-chats-img">
                                    <img src="{{asset('storage/images/doctors/'.$receiverInstance->img)}}"/>

                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                        <h4>{{$receiverInstance->name}}</h4>
                                        <p>{{$message->body}}</p>
                                        <span class="time">{{$message->created_at->format('m: i a')}} </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Outgoing notifications -->
{{--                        <div class="outgoing-chats">--}}
{{--                            <div class="outgoing-chats-img">--}}
{{--                                <img src="../images/24.jpg">--}}

{{--                            </div>--}}
{{--                            <div class="outgoing-msg">--}}
{{--                                <div class="outgoing-chats-msg">--}}
{{--                                    <h4>Mariam Ali</h4>--}}
{{--                                    <p class="multi-msg">Hi Doctor. </p>--}}
{{--                                    <p class="multi-msg"> I need your help with my problem</p>--}}


{{--                                    <span class="time">18:30 PM | July 24 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                            <script>
                                $('.msg-page').on('scroll',function (){
                                    var top = $('.msg-page').scrollTop();
                                    if (top == 0)
                                    {
                                        window.livewire.emit('loadmore');
                                    }
                                });
                            </script>
                @else
                        <p style="text-align: center;margin-bottom: 80rem;color: #ad6ce0;">
                            no conversation selected
                        </p>
                    @endif



            </div>



        </div>
            @livewire('chat.send-message')
    </div>
    </div>

    <script>
        window.addEventListener('rowChatToBottom',event=>{
            $('.msg-page').scrollTop($('.msg-page')[0].scrollHeight);

        });

    </script>
</div>
