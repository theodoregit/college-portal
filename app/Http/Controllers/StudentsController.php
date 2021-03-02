<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
        //students controller
        public function index(){
            return view('portals.student.index');
        }
    
        public function announcement(){
            return view('portals.student.announcements');
        }
    
        public function courses(){
            return view('portals.student.courses');
        }
    
        public function evaluation(){
            return view('portals.student.evaluation');
        }
            
        public function grade(){
            return view('portals.student.grade-report');
        }

        public function profile(){
            return view('portals.student.profile');
        }

        public function register(){
            return view('portals.student.register');
        }

        public function report(){
            return view('portals.student.report');
        }

}
