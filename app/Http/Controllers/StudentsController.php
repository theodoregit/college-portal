<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //students controller
    public function index(){
        return view('portals.');
    }
}
