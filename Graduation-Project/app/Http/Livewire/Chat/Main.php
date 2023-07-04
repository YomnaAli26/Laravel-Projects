<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use Livewire\Component;

class Main extends Component
{

    public function render()
    {
        return view('livewire.chat.main');
    }
}
