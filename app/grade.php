<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    //
    protected $fillable = [
        'studentname', 'assessment','final',
    ];
    public function Student(){
        return $this->hasMany('App\Student');
    }
}
