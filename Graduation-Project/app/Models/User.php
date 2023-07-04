<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'name',
        'Gender',
        'DateOfBirth',
        'img',
        'PhoneNumber',
        'Address',
        'google_id',
        'facebook_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function safespaces()
    {
        return $this->hasMany(Safespace::class,'user_id');
    }
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class,'doctor_id');
    }
    public function hasPrescriptions()
    {
        return $this->hasMany(Prescription::class,'user_id');
    }

    public function userAppointments()
    {
        return $this->hasMany(Appointment::class,'user_id');
    }
    public function doctorAppointments()
    {
        return $this->hasMany(Appointment::class,'doctor_id');
    }
    public function podcasts()
    {
        return $this->belongsToMany(Podcast::class, 'user_favoirate_podcasts', 'user_id', 'podcast_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'users_categories','user_id','cate_id');
    }
    public function favoriteDoctors()
    {
        return $this->belongsToMany(Doctor::class,'user_favoirate_therapists','user_id','doctor_id');
    }
    public function messages()
    {
        return $this->belongsToMany(Doctor::class,'notifications','user_id','doctor_id');
    }
    public function reviews()
    {
        return $this->belongsToMany(Doctor::class,'reviews','user_id','doctor_id');
    }
//chat
public function chats(){
        return $this->belongsToMany(Chat::class,'chat_user','user_id','chat_id');
}




}
