<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Nette\Utils\Type;

class Chatbox extends Component
{

    public $selectedConversation;
    public $receiverInstance;
    public $message_count;
    public $messages;
    public $paginateVar = 10;
    protected $listeners =['loadConversation','pushMessage','loadmore'];

    public function loadmore()
    {
        dd('top reached');
    }

    public function pushMessage($messageId)
    {
        $newMessage = Message::find($messageId);
        $this->messages->push($newMessage);
        $this->dispatchBrowserEvent('rowChatToBottom');

    }

    public function loadConversation(Conversation $conversation,Doctor $receiver)
    {
//        dd($conversation,$receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance =$receiver;
        $this->message_count =Message::where('conversation_id',$this->selectedConversation->id)->count();
        $this->messages =Message::where('conversation_id',$this->selectedConversation->id)->skip($this->message_count - $this->paginateVar)
            ->take($this->paginateVar)->get();

    }
    public function render()
    {
        $this->doctors = Doctor::where('id','!=',Auth::id())->get();
        return view('livewire.chat.chatbox');
    }
}
