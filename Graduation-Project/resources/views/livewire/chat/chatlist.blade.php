<div>

    <input type="text" placeholder="Search..">
    <div class="persons">
        @if(count($conversations) > 0)
            @foreach($conversations as $conversation)
                <div class="person active" data-mark="person1" wire:key='{{$conversation->id}}' wire:click="$emit('chatUserSelected',{{$conversation}},{{$this->getChatUserInstance($conversation,$name='id')}})">
                    <img src="{{asset('storage/images/doctors/'.$this->getChatUserInstance($conversation,$name='img'))}}">
                    <div style="margin-right: 10.5rem;">
                        <h4 >{{$this->getChatUserInstance($conversation,$name='name')}}</h4>

{{--                        <h5>{{$conversation->notifications->last()->body}}</h5>--}}
                    </div>
{{--                    <h6>{{$conversation->notifications->last()->created_at->shortAbsoluteDiffForHumans()}}</h6>--}}


                </div>
                <div><hr color="#e8e8e8"></div>

            @endforeach
        @else
            you have no conversation
        @endif
    </div>
</div>


