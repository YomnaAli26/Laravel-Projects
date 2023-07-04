<?php

namespace App\Http\Resources;

use App\Models\Article;
use App\Models\Podcast;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       $categories = $this->categories;
       $newArr =[];
       foreach ($categories as $category)
       {
           $podcasts = Podcast::where('cate_id','=',$category->pivot->cate_id)->get();
           $newArr[] =PodcastResource::collection($podcasts);

       }
       return $newArr;


    }
}
