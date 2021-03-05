<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmittedStudents extends Model
{
    protected $fillable = [
        'studentname',
        'idnumber',
        'coursename',
        'assessment',
        'project',
        'finalexam',
        'sum',
        'grade'
    ];
}
