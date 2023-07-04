<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chatlist extends Component
{
    //    public $doctors;
//    public $message = "How are you";
//
//    public function checkconversation($receiverId)
//    {
////        dd($receiverId);
//        $checkedConversation = Conversation::where('receiver_id',Auth::id())->where('sender_id',$receiverId)->orWhere('receiver_id',$receiverId)->
//        where('sender_id',Auth::id())->get();
//
//        if (count($checkedConversation)==0)
//        {
////            dd("no conversation");
//            $createdConversation = Conversation::create([
//                'receiver_id'=>$receiverId,
//                'sender_id'=>Auth::id(),
//                ]);
//
//            $createdMessage = Message::create([
//                'conversation_id'=>$createdConversation->id,
//                'sender_id'=>Auth::id(),
//                'receiver_id'=>$receiverId,
//                'body'=>$this->message
//            ]);
//            $createdConversation->last_time_message = $createdMessage->created_at;
//            $createdConversation->save();
//            dd("saved");
//        }
//        elseif (count($checkedConversation)>=1)
//        {
//            dd("exist");
//        }
//    }
    public $auth_id;
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedConversation;

    protected $listeners = ['chatUserSelected','refresh'=>'$refresh'];

    public function chatUserSelected(Conversation $conversation,$receiverId)
    {
//        dd($conversation,$receiverId);
        $this->selectedConversation =$conversation;
        $receiverInstance = Doctor::find($receiverId);
        $this->emitTo('chat.chatbox','loadConversation',$this->selectedConversation,$receiverInstance);
        $this->emitTo('chat.send-message','updateSendMessage',$this->selectedConversation,$receiverInstance);

    }


    public function getChatUserInstance(Conversation $conversation,$request)
    {
        $this->auth_id = Auth::id();
        if ($conversation->sender_id == $this->auth_id)
        {
            $this->receiverInstance = Doctor::firstWhere('id',$conversation->receiver_id);

        }
        else
        {
            $this->receiverInstance = Doctor::firstWhere('id',$conversation->sender_id);
        }
        if (isset($request))
        {
            return $this->receiverInstance->$request;
        }
    }
    public function mount()
    {
        $this->auth_id = Auth::id();
        $this->conversations = Conversation::where('sender_id',$this->auth_id)->
        orWhere('receiver_id',$this->auth_id)->orderBy('last_time_message','DESC')->get();
    }
    public function render()
    {
        return view('livewire.chat.chatlist');
    }
}
