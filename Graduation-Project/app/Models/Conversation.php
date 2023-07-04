<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable =[
        'receiver_id',
        'sender_id',
        'last_time_message'
    ];
    use HasFactory;
    public function messages()
    {
        return $this->hasMany(Message::class,"conversation_id");
    }
}
