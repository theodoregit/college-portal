<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAccount extends Model
{
    protected $fillable = [
        'fullname',
        'idnumber',
        'password',
    ];
}
