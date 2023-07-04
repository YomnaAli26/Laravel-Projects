<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StressResource extends JsonResource
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
            'stress management' => $this->stress_management_meditation,
        ];
    }
}
