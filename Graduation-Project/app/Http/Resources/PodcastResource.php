<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastResource extends JsonResource
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
            'podcast_id'=>$this->id,
            'name'=>$this->name,
            'video'=>$this->video,
            'category_name'=>Category::where('id','=',$this->cate_id)->get()->pluck("name"),
        ];
    }
}
