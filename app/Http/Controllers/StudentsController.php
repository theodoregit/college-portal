<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\ComputerScience;
use App\StudentsHistory;
use DB;
use App\AdmittedStudents;

class StudentsController extends Controller
{
    //students controller
    public function index(){
        return view('portals.student.index');
    }

    public function announcement(){
        return view('portals.student.announcements')
                    ->with('posts', Announcement::orderByDesc('created_at')->get());
    }

    public function courses(){
        return view('portals.student.courses');
    }

    public function evaluation(){
        return view('portals.student.evaluation');
    }

    public function grade($id){
        $year = StudentsHistory::where('id', $id)->pluck('year');
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $year);
        $semester = StudentsHistory::where('id', $id)->pluck('semester');
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $semester);
        // $credithr = 
        return view('portals.student.grade-report')
                    ->with('year', $year)
                    ->with('semester', $semester)
                    ->with('grades', AdmittedStudents::all());
    }

    public function profile(){
        return view('portals.student.profile');
    }

    public function register($id){
        $year = StudentsHistory::where('id', $id)->pluck('year');
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $year);
        $semester = StudentsHistory::where('id', $id)->pluck('semester');
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $semester);

        $course = DB::table('computer_sciences')
                        ->where('year', '=', $year)
                        ->where('semester', '=', $semester)->get();

        return view('portals.student.register')
                    ->with('courses', $course)
                    ->with('id', $id);
    }

    public function registerCourse(Request $request, $id){
        $studentname = StudentsHistory::where('id', $id)->pluck('fullname');
        $studentname = preg_replace("/[^a-zA-Z0-9\s]/", "", $studentname);
        $idnumber = StudentsHistory::where('id', $id)->pluck('idnumber');
        $idnumber = preg_replace("/[^a-zA-Z0-9\s]/", "", $idnumber);
        $rr = $request->all();
        $rr = array_values($rr);
        for($i = 1; $i <= (count($rr)-1); $i++){
            $admission = AdmittedStudents::create([
                'studentname' => $studentname,
                'idnumber' => $idnumber,
                'coursename' => $rr[$i],
            ]);
        }
        return view('portals.student.course');

    }

    public function report(){
        return view('portals.student.report');
    }
}
