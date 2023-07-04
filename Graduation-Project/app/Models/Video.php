<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'yoga',
            'sport',
            'quick_and_easy',
            'sleep_better_meditation',
            'stress_management_meditation'
        ];
}
