<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','img'
    ];
    public function articles()
    {
        return $this->hasMany(Article::class,'cate_id');
    }
    public function podcasts()
    {
        return $this->hasMany(Podcast::class,'cate_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'users_categories','cate_id','user_id');
    }
}
