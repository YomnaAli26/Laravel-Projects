<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\UserCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PrescriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $cate_id = UserCategory::where('user_id','=',Auth::user()->id)->get()->pluck("cate_id");
        $cate_name = Category::where('id','=',$cate_id)->get()->pluck("name");
        return
            [
                'pres_content'=>$this->content,
                'doctor_name'=>$this->doctor->name,
                'doctor_degree'=>$this->doctor->degree,
                'patient_complaint'=>$cate_name,
            ];
    }
}
