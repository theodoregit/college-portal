<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsHistory extends Model
{
    protected $fillable = [
        'admission',
        'fullname',
        'sex',
        'disability',
        'birthplace',
        'dob',
        'housenumber',
        'kebele',
        'town',
        'woreda',
        'zone',
        'region',
        'department',
        'year',
        'idnumber',
        'image'
    ];

    public function getImageAttribute($image){
        return asset($image);
    }
}
