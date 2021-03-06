<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class StudentAccount extends Authenticatable
{
    use Notifiable;

    // protected $guard = 'admin';

    protected $fillable = [
        'fullname',
        'idnumber',
        'department',
        'password',
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
