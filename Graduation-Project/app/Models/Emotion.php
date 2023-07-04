<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'emotion_img'
    ];
}
