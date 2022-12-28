<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $fillable =[
      'title',
      'description',
        'img',
        'body',
        'user_id'
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }

}
