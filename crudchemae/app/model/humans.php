<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class humans extends Model
{
    protected $fillable = [
        'first_name', 'middle_name','last_name','email','address','age','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
} 

