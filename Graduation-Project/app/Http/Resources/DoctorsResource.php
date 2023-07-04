<?php

namespace App\Http\Resources;

use App\Models\Rate;
use App\Models\UserFavoirateTherapist;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class DoctorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return
            [
            'doctor_id'=>$this->id,
            'doctor_name'=>$this->name,
            'doctor_img'=>$this->img,
            'doctor_degree'=>$this->degree,
            'doctor-favourite-by-current-user' => UserFavoirateTherapist::where('user_id','=',Auth::user()->id)->where('doctor_id','=',$this->id)->get()->pluck("favourite"),
            'doctor-rate-by-current-user'=>Rate::where('user_id','=',Auth::user()->id)->where('doctor_id','=',$this->id)->get()->pluck("rate"),
            'num_of_users-rates-doctor'=>count(Rate::where('doctor_id','=',$this->id)->get()),

            ];
    }
}
