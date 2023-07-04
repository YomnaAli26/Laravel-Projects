<?php

namespace App\Http\Resources;

use App\Models\Rate;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class FavouriteDoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $favoriteDoctors = $this->favoriteDoctors;
        $newArr = [];
        foreach ($favoriteDoctors as $favoriteDoctor)
        {
                $arr = [
                        'doctor_name'=>$favoriteDoctor->name,
                        'doctor_img'=>$favoriteDoctor->img,
                        'doctor_degree'=>$favoriteDoctor->degree,
                        'doctor-rate-by-current-user'=>Rate::where('user_id','=',Auth::user()->id)->where('doctor_id','=',$favoriteDoctor->pivot->doctor_id)->get()->pluck("rate"),
                        'num_of_users-rates-doctor'=> count(Rate::where('doctor_id','=',$favoriteDoctor->pivot->doctor_id)->get()),



                ];
                $newArr[] = $arr;




        }
        return $newArr;





    }
}
