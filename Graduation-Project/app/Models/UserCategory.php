<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    protected $table ="users_categories";
    protected $fillable =[
      'user_id',
      'cate_id',
    ];
    use HasFactory;
}
