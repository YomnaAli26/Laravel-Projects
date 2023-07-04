
<div>
    @if($selectedConversation)
    <div class="msg-bottom">
        <form wire:submit.prevent='sendMessage' action="">
        <div class="input-group">
            <input wire:model="body" type="text" class="form-control" placeholder="Write message...">

            <button type="submit" class="input-group-text send-icon">
                <i class="fa-regular fa-paper-plane"></i></button
        </div>
        </form>
    </div>
    @endif


</div>
