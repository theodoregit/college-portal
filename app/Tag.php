<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function grade(){
        return $this->belongsToMany('App\grade');
    }
}
