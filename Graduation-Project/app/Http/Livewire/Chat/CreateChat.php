<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateChat extends Component
{
    public $doctors;
    public $message = "How are you";


    public function checkconversation($receiverId)
    {
//        dd($receiverId);
        $checkedConversation = Conversation::where('receiver_id', Auth::id())->where('sender_id', $receiverId)->orWhere('receiver_id', $receiverId)->
        where('sender_id', Auth::id())->get();

        if (count($checkedConversation) == 0) {
            dd("no conversation");
//            $createdConversation = Conversation::create([
//                'receiver_id' => $receiverId,
//                'sender_id' => Auth::id(),
//            ]);
//
//            $createdMessage = Message::create([
//                'conversation_id' => $createdConversation->id,
//                'sender_id' => Auth::id(),
//                'receiver_id' => $receiverId,
//                'body' => $this->message
//            ]);
//            $createdConversation->last_time_message = $createdMessage->created_at;
//            $createdConversation->save();
//            dd("saved");
        } elseif (count($checkedConversation) >= 1) {
            dd("exist");
        }
    }


    public function render()
    {
        $this->doctors = Doctor::where('id', '!=', Auth::id())->get();
        return view('livewire.chat.create-chat');
    }
}
