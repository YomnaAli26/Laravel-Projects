<?php

namespace App\Http\Requests\Admin;

use Faker\Provider\Address;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'DateOfBirth'=>'required',
            'Address'=>'required',
            'Gender'=>'required',
            'img'=>['required','mimes:jpg,png,jpeg'],
            'PhoneNumber'=>'required',
            'password'=>'required',

        ];
    }
}
