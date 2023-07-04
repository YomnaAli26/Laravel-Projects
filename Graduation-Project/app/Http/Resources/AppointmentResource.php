<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
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
            "Date"=>$this->Date,
            "Time"=>$this->Time,
            "Slot"=>$this->slot,
            "Doctor_name"=>$this->doctor->name
        ];
    }
}
