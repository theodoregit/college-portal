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
        $fullname = StudentsHistory::where('idnumber', $idnumber)->pluck('fullname');
        $fullname = preg_replace("/[^a-zA-Z0-9\s]/", "", $fullname);

        return view('portals.student.index')
                    ->with('fullname', $fullname);
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

        $idnumber = Auth::user()->idnumber;
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
                break;
            case 'Nursing':
                //
                break;
            case 'Pharmacy':
                //
                break;
            
            default:
                //
                break;
        }

        $course = DB::table($dept)
                        ->where('year', '=', $year)
                        ->where('semester', '=', $semester)->get();

        return view('portals.student.register')
                    ->with('courses', $course)
                    ->with('id', $id)
                    ->with('idnumber', $idnumber);
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
