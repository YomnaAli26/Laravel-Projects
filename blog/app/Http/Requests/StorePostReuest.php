<?php

namespace App\Http\Requests;

use App\Rules\UserLimitPosts;
use Illuminate\Foundation\Http\FormRequest;

class StorePostReuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>['required','min:3'],
            'description'=>['required','min:10'],
            'user_id'=>['exists:users,id',new UserLimitPosts()],
            'img'=>['required','image','mimes:jpg,png'],
        ];
    }
}
