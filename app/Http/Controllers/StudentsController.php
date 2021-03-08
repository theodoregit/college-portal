<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\ComputerScience;
use App\StudentsHistory;
use DB;
use App\AdmittedStudents;
use Auth;

class StudentsController extends Controller
{    
    public function __construct(){
        $this->middleware('auth:student');
    }
    
    public function index(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        $fullname = StudentsHistory::where('idnumber', $idnumber)->pluck('fullname');
        $fullname = preg_replace("/[^a-zA-Z0-9\s]/", "", $fullname);

        return view('portals.student.index')
                    ->with('id', $id)
                    ->with('fullname', $fullname);
    }

    public function announcement(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        return view('portals.student.announcements')
                    ->with('id', $id)
                    ->with('posts', Announcement::orderByDesc('created_at')->get());
    }

    public function courses(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');
        $test = AdmittedStudents::where('idnumber', $idnumber)->get();
        $idnumber = preg_replace("/[^a-zA-Z0-9\s]/", "", $idnumber);
        // echo $test;
        return view('portals.student.courses')
                    ->with('id', $id)
                    ->with('courses', AdmittedStudents::where('idnumber', $idnumber)->get());
    }

    public function evaluation(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        return view('portals.student.evaluation')
                    ->with('id', $id);
    }

    public function grade($id){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        $year = StudentsHistory::where('id', $id)->pluck('year');
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $year);
        $semester = StudentsHistory::where('id', $id)->pluck('semester');
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $semester);

        $idnumber = StudentsHistory::where('id', $id)->pluck('idnumber');
        $idnumber = preg_replace("/[^a-zA-Z0-9\s]/", "", $idnumber);
        $fullname = StudentsHistory::where('id', $id)->pluck('fullname');
        $fullname = preg_replace("/[^a-zA-Z0-9\s]/", "", $fullname);

        $department = StudentsHistory::where('fullname', $fullname)->pluck('department');
        $department = preg_replace("/[^a-zA-Z0-9\s]/", "", $department);
        
        // $credithr = 
        return view('portals.student.grade-report')
                    ->with('year', $year)
                    ->with('semester', $semester)
                    ->with('idnumber', $idnumber)
                    ->with('fullname', $fullname)
                    ->with('id', $id)
                    ->with('grades', AdmittedStudents::where('idnumber', $idnumber)->get());
    }

    public function profile(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        return view('portals.student.profile')
                    ->with('id', $id);
    }

    public function register($id){
        $idnumber = Auth::user()->idnumber;
        $id = $idnumber;
        $idno = $idnumber;
        $id = preg_replace("/[^a-zA-Z0-9\s]/", "", $id);
        $registered = AdmittedStudents::where('idnumber', '=', $id)->first();
        // echo $registered;
        $department = StudentsHistory::where('idnumber', $idnumber)->pluck('department');
        $department = preg_replace("/[^a-zA-Z0-9\s]/", "", $department);
        $year = StudentsHistory::where('idnumber', $id)->pluck('year');
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $year);
        $semester = StudentsHistory::where('idnumber', $id)->pluck('semester');
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $semester);
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');
        $id = preg_replace("/[^a-zA-Z0-9\s]/", "", $id);

        
        switch ($department) {
            case 'Computer Science':
                $dept = 'computer_sciences';
                break;
            case 'Accounting and Finance':
                //
                break;
            case 'Economics':
                $dept = 'economics';
                break;
            case 'Nursing':
                $dept = 'nursings';
                break;
            case 'Pharmacy':
                //
                break;
            
            default:
                //
                break;
        }
        // echo $dept;

        $course = DB::table($dept)
                        ->where('year', '=', $year)
                        ->where('semester', '=', $semester)->get();

        return view('portals.student.register')
                    ->with('courses', $course)
                    ->with('id', $id)
                    ->with('year', $year)
                    ->with('semester', $semester)
                    ->with('hasRegistered', $registered)
                    ->with('idnumber', $idnumber);
    }

    public function registerCourse(Request $request, $id){
        $studentname = StudentsHistory::where('id', $id)->pluck('fullname');
        $studentname = preg_replace("/[^a-zA-Z0-9\s]/", "", $studentname);
        $idnumber = StudentsHistory::where('id', $id)->pluck('idnumber');
        $idnumber = preg_replace("/[^a-zA-Z0-9\s]/", "", $idnumber);
        $department = StudentsHistory::where('idnumber', $idnumber)->pluck('department');
        $department = preg_replace("/[^a-zA-Z0-9\s]/", "", $department);

        switch ($department) {
            case 'Computer Science':
                $dept = 'computer_sciences';
                break;
            case 'Accounting and Finance':
                //
                break;
            case 'Economics':
                $dept = 'economics';
                break;
            case 'Nursing':
                $dept = 'nursings';
                break;
            case 'Pharmacy':
                //
                break;
            
            default:
                //
                break;
        }

        $rr = $request->all();
        $rr = array_values($rr);
        for($i = 1; $i <= (count($rr)-1); $i++){
            $admission = AdmittedStudents::create([
                'studentname' => $studentname,
                'idnumber' => $idnumber,
                'coursename' => $rr[$i],
            ]);
        }
        $year = StudentsHistory::where('idnumber', $id)->pluck('year');
        $year = preg_replace("/[^a-zA-Z0-9\s]/", "", $year);
        $semester = StudentsHistory::where('idnumber', $id)->pluck('semester');
        $semester = preg_replace("/[^a-zA-Z0-9\s]/", "", $semester);
        $course = DB::table($dept)
                        ->where('year', '=', $year)
                        ->where('semester', '=', $semester)->get();
        return view('portals.student.courses')
                    ->with('courses', $courses);

    }

    public function report(){
        $idnumber = Auth::user()->idnumber;
        $id = StudentsHistory::where('idnumber', $idnumber)->pluck('id');

        return view('portals.student.report')
                    ->with('id', $id);
    }
}
