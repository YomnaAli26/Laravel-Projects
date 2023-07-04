<?php

namespace App\Http\Resources;

use App\Models\Review;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $reviews = $this->reviews;
        $newArr = [];
        foreach ($reviews as $review)
        {
            $arr =[
              'user-name'=>$review->name,
              'review-content'=>Review::where('user_id','=',$review->pivot->user_id)->where('doctor_id','=',$review->pivot->doctor_id)->get()->pluck("content"),
            ];
            $newArr[] =$arr;
        }
        return $newArr;


    }
}
