<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavoiratePodcast extends Model
{
    protected $fillable=[
        'user_id'
        ,'podcast_id',];
    use HasFactory;


}
