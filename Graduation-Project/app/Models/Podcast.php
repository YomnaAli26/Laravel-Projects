<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'vedio',
        'cate_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class);

    }


}
