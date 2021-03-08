<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economics extends Model
{
    protected $fillable = [
        'coursename',
        'coursenumber',
        'year',
        'semester',
        'credithr'
    ];
}
