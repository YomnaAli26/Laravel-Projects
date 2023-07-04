<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{

    use HasFactory,HasApiTokens;
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable=[
        'name',
        'email',
        'password',
        'degree',
        'experience',
        'about',
        'img'


    ];
    public function posts()
    {
        return $this->hasMany(Post::class,'doctor_id');
    }
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class,'doctor_id');
    }

    public function userAppointments()
    {
        return $this->belongsToMany(User::class);
    }
    public function reviews()
    {
        return $this->belongsToMany(User::class,'reviews','doctor_id','user_id');
    }
    public function rates()
    {
        return $this->belongsToMany(User::class,'rates','doctor_id','user_id');
    }
    public function favoriteUsers()
    {
        return $this->belongsToMany(User::class,'user_favoirate_therapists','doctor_id','user_id');
    }

}
