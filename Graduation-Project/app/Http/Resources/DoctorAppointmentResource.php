<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorAppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'doctor name'=>$this->doctor->name,
            'doctor degree'=>$this->doctor->degree,
            'doctor img'=>$this->doctor->img,

            'slot '=>$this->slot,
            'Time '=>$this->Time,
            'Date '=>$this->Date,

        ];
    }
}
