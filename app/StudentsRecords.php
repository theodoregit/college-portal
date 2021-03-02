<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsRecords extends Model
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
        'image'
    ];

    public function getImageAttribute($image){
        return asset($image);
    }
}
