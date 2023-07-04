<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_likes extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','doctor_id','user_id','like'
    ];
}
