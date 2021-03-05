<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerScience extends Model
{
    protected $fillable = [
        'coursename',
        'coursenumber',
        'year',
        'semester',
        'credithr'
    ];
}
