<?php

namespace App\Rules;

use App\Models\Post;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserLimitPosts implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $posts =  Post::where('user_id',$value)->get();
        return count($posts) <= 3;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'User allow to write only three posts.';
    }
}
