<?php

namespace App\Models;

use App\Models\Scopes\StoreScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'slug',
        'description',
        'image',
        'status',
        'price',
        'compare_price',
        'tags',
    ];
    protected static function booted()
    {
        static::addGlobalScope('store',new StoreScope());
    }

    public function scopeActive(Builder $builder)
    {
        $builder->where('status','active');
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image)
        {
            return 'https://boschbrandstore.com/wp-content/uploads/2019/01/no-image.png';
        }
        if (Str::startsWith($this->image,['http://','https://']))
        {
            return $this->image;
        }
        asset('storage/'.$this->image);
    }

    public function getSalePrecentAttribute()
    {
        if (!$this->compare_price)
        {
            return 0;
        }
        return round(100-($this->price/$this->compare_price*100));
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function store()
    {
        return $this->belongsTo(Store::class,'store_id','id');
    }

}
