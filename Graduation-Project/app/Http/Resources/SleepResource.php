<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SleepResource extends JsonResource
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
            'sleep better' => $this->sleep_better_meditation,
        ];

    }
}
