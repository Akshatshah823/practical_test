<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'mobile',
        'country_code',
        'address',
        'gender',
        'hobbies',
        'photo'
        ];

        protected $casts =[
            'hobbies' => 'array',
        ];


}
