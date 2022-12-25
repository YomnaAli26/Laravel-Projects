<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;

    Protected $table= 'orders';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'pincode',
        'status',
        'message',
        'tracking_no',
        'user_id',
        'total_price',


    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
