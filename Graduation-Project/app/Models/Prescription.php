<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [

        'content',
        'user_id',
        'doctor_id'
        ,];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

}
