<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\StudentsHistory;
use App\StudentAccount;
use App\Announcement;

class RegistrarController extends Controller
{
    public function index(){
        return view('portals.registrar.index');
    }
    public function register(){
        return view('portals.registrar.register');
    }
    public function recordHistory(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'admission' => 'required|max:255',
            'firstname' => 'required',
            'fathername' => 'required',
            'gfathername' => 'required|max:255',
            'sex' => 'required|max:255',
            'disability' => 'required|max:255',
            'housenumber' => 'required|max:255',
            'kebele' => 'required',
            'town' => 'required',
            'woreda' => 'required|max:255',
            'zone' => 'required|max:255',
            'region' => 'required|max:255',
            'dob' => 'required|date|max:255',
            'birthplace' => 'required|max:255',
            'department' => 'required|max:255',
            'year' => 'required|max:255',
            'semester' => 'required|max:255',
            'image' => 'required|image',
        ]);
        //saving image file
        $image = $request->image;
        $image_upload = time().$image->getClientOriginalName();
        $image->move('uploads/studentsphoto', $image_upload);

        //generate id number
        $idnumber = "D".$request->department[0].$request->admission[0]. "/".mt_rand(1000, 9999)."/". $request->currentyear[2]. $request->currentyear[3];
        // echo $idnumber;
        $password = $request->firstname . $idnumber[4] . $idnumber[5] . $idnumber[6] . $idnumber[7];
        // echo $password;

        //inserting into the database
        $student = StudentsHistory::create([
            'admission' => $request->admission,
            'fullname' => $request->firstname . ' ' . $request->fathername . ' ' . $request->gfathername,
            'sex' => $request->sex,
            'disability' => $request->disability,
            'housenumber' => $request->housenumber,
            'kebele' => $request->kebele,
            'town' => $request->town,
            'woreda' => $request->woreda,
            'zone' => $request->zone,
            'region' => $request->region,
            'dob' => $request->dob,
            'department' => $request->department,
            'year' => $request->year,
            'semester' => $request->semester,
            'birthplace' => $request->birthplace,
            'idnumber' => $idnumber,
            'image' => 'uploads/studentsphoto/' . $image_upload,
        ]);
        
        $account = StudentAccount::create([
            'fullname' => $request->firstname . ' ' . $request->fathername . ' ' . $request->gfathername,
            'department' => $request->department,
            'idnumber' => $idnumber,
            'password' => bcrypt($password),
        ]);
        
        Session::flash('success', '');
        
        return redirect()->back();
    }
    public function account(){
        return view('portals.registrar.account');
    }
    public function createAccount(Request $request, $id){
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'department' => 'required',
            'idnumber' => 'required',
            'password' => 'required|max:255',            
        ]);
        $account = StudentAccount::create([
            'fullname' => $request->fullname,
            'department' => $request->department,
            'idnumber' => $request->idnumber,
            'password' => bcrypt($request['password']),
        ]);
        
        return redirect()->back();

        // return User::create([
        //     'fullname' => $id['idnumber'],
        //     'department' => $id['idnumber'],
        //     'idnumber' => $id['idnumber'],
        //     'password' => bcrypt($id['password']),
        // ]);
    }
    public function manage(){
        return view('portals.registrar.manage')
                    ->with('account', StudentAccount::all());
    }
    public function grade(){
        return view('portals.registrar.grades');
    }
    public function evaluation(){
        return view('portals.registrar.evaluations');
    }
    public function announcement(){
        return view('portals.registrar.announcement')
                    ->with('announcements', Announcement::all());
    }
    public function Createannouncement(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',           
        ]);
        $announcement = Announcement::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        
        return redirect()->back();
    }
    public function students(){
        return view('portals.registrar.students')
                    ->with('students', StudentsHistory::all());
    }
    public function student($id){
        // $hasAccount = StudentAccount::find(StudentsHistory::find($id));
        // $idnumber = StudentAccount::where('idnumber', StudentsHistory::find($id)->pluck('fullname'))->first();
        // echo "hello ". StudentAccount::find($id)->pluck('idnumber');
        
        $random_password = mt_rand(1000, 9000);
        return view('portals.registrar.student')
                    ->with('history', StudentsHistory::find($id))
                    ->with('password', $random_password);
    }
    public function editHistory($id){        
        return view('portals.registrar.edit')
                    ->with('students', StudentsHistory::find($id));
    }
    public function updateHistory(Request $request, $id){
        // dd($request->all());
        $this->validate($request, [                        
            'admission' => 'required|max:255',
            'sex' => 'required|max:255',
            'disability' => 'required|max:255',
            'birthplace' => 'required|max:255',
            'department' => 'required|max:255',
            'year' => 'required|max:255',
            'semester' => 'required|max:255',
            'image' => 'required|image',
            'fullname' => 'required|max:255',
            'housenumber' => 'required|max:255',
            'kebele' => 'required',
            'town' => 'required',
            'woreda' => 'required|max:255',
            'zone' => 'required|max:255',
            'region' => 'required|max:255',
            'idnumber' => 'required',
            'dob' => 'required|date|max:255',
        ]);
        //saving image file
        $image = $request->image;
        $image_upload = time().$image->getClientOriginalName();
        $image->move('uploads/studentsphoto', $image_upload);

        //updating table in the database
        $student = StudentsHistory::find($id);

        $student->admission = $request->admission;
        $student->fullname = $request->fullname;
        $student->sex = $request->sex;
        $student->disability = $request->disability;
        $student->housenumber = $request->housenumber;
        $student->kebele = $request->kebele;
        $student->town = $request->town;
        $student->woreda = $request->woreda;
        $student->zone = $request->zone;
        $student->region = $request->region;
        $student->department = $request->department;
        $student->dob = $request->dob;
        $student->birthplace = $request->birthplace;
        $student->year = $request->year;
        $student->semester = $request->semester;
        $student->year = $request->idnumber;
        $student->image = 'uploads/studentsphoto/' . $image_upload;
        $student->save();

        return redirect()->route('portals.registrar.students');
        
    }

}
