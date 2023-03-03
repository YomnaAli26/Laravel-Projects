<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Post extends Model
{

    use HasFactory,SoftDeletes,Sluggable;
    protected $fillable =[
        'title',
        'description',
        'user_id',
        'img',
        'slug'

    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the post's comments.
     */


}
