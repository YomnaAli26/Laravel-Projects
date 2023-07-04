<?php

namespace App\Http\Resources;

use App\Models\Article;
use App\Models\Category;
use App\Models\Rate;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'content'=>$this->content,
            'desc'=>$this->desc,
            'img'=>$this->img,
            'category_name'=>Category::where('id','=',$this->cate_id)->get()->pluck("name"),
        ];
    }
}
