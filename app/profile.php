<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //
    protected $fillable = [
        'fullname', 'email','mobilenumber','address','instructingcourse',
    ];
}
