<?php

namespace App\Http\Resources;

use App\Models\Doctor;
use App\Models\Rate;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AppointmentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $appointments = $this->userAppointments;

        $newArr =[];
        foreach ($appointments as $appointment)
        {
            $arr = [
              "appointments"=>
                  [
                  "doctor_name"=>Doctor::where('id','=',$appointment->doctor_id)->pluck("name"),
                  "doctor_img"=>Doctor::where('id','=',$appointment->doctor_id)->pluck("img"),
                  "doctor_degree"=>Doctor::where('id','=',$appointment->doctor_id)->pluck("degree"),
                  'doctor_rate'=>Rate::where('doctor_id','=',$appointment->doctor_id)
                      ->where('user_id','=',Auth::user()->id)->pluck("rate"),
                  "Date"=>$appointment->Date,
                  "Time"=>$appointment->Time,
                  "Slot"=>$appointment->slot,
              ]
            ];
            $newArr[] =$arr;
        }
        return $newArr;
    }
}
