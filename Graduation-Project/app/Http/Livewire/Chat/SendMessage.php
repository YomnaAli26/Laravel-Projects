<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $body;
    protected $listeners = ['updateSendMessage'];
    public function sendMessage()
    {
//                dd($this->body);
        if ($this->body == null)
        {
            return null;

        }
        $createMessage = Message::create([
            'conversation_id'=>$this->selectedConversation->id,
            'sender_id'=>Auth::id(),
            'receiver_id'=>$this->receiverInstance->id,
            'body'=>$this->body,
        ]);
        $this->selectedConversation->last_time_message = $createMessage->created_at;
        $this->selectedConversation->save();
        $this->emitTo('chat.chatbox','pushMessage',$createMessage->id);
        //research conversation list
        $this->emitTo('chat.chatlist','refresh');
        $this->reset('body');

    }
    public function updateSendMessage(Conversation $conversation,Doctor $receiver)
    {
//        dd($conversation,$receiver);
        $this->selectedConversation =$conversation;
        $this->receiverInstance =$receiver;
    }
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
