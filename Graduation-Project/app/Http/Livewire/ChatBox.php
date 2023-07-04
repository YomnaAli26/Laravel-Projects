<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatBox extends Component
{
    public $chats; //that our authorizied user linked to

    public $activechat;
    public $activeChatMessages;
    public $message; //variable message to house the message value
    //mount when component get initalized
    public function mount()
    {
       $this->chats =Auth::user()->chats;//get chat for user
        $this->activechat=Auth::user()->chats()->latest()->first();

            }
    public function render()
    {
        return view('livewire.chat-box');
    }
    // function for sending messages
    public function sendMessage(){
        $this->activechat->messages()->create([
            'message'=>$this->message,
            'user_id'=>Auth::user()->id
        ]);
        //clear the message value
        $this->message='';

        // refresh the main active chat madel
        $this->activechat->refresh();

    }
    //function to refresh the messages
    public function refreshMessages(){
        // refresh the main active chat madel
        $this->activechat->refresh();
        $this->chats =Auth::user()->chats;//get latest chat for user


    }
}
