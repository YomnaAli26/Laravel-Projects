<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ChatMessage extends Model
{
     protected $fillable =[
        'message',
         'user_id',
         'chat_id',

];
    use HasFactory;
    //relation to show users
public function user(){
    return $this->belongsTo(User::class,'user_id','id');
}

//to see if messages is auth or not
public function isAuthrnticatedUsers(){
    return $this->user_id===Auth::user()->id;
}

//function to get readable created
public function getReadableCreatedAt(){
    return Carbon::parse($this->created_at)->diffForHumans();
}
}
