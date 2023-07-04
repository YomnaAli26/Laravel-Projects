<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable=[
      'img',
      'emotion_id'
    ];
    public function emotion()
    {
        return $this->belongsTo(Emotion::class,'emotion_id');
    }
}
