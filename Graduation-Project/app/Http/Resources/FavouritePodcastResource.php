<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavouritePodcastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $podcasts = $this->podcasts;
        $newArr = [];
        foreach ($podcasts as $podcast)
        {
            $arr = [
              "name"=>$podcast->name,
              "video"=>$podcast->video,
            ];
            $newArr[] =$arr;
        }
        return $newArr;

    }
}
