<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\StudentsRecords;

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
            'image' => 'required|image',
        ]);
        //saving image file
        $image = $request->image;
        $image_upload = time().$image->getClientOriginalName();
        $image->move('uploads/studentsphoto', $image_upload);

        //inserting into the database
        $rooms = StudentsRecords::create([
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
            'birthplace' => $request->birthplace,
            'image' => 'uploads/studentsphoto/' . $image_upload,
        ]);
        
        Session::flash('success', 'Room added successfully!');
        
        return redirect()->back();
    }
    public function account(){
        return view('portals.registrar.account');
    }
    public function createAccount(){

    }
    public function manage(){
        return view('portals.registrar.manage');
    }
    public function grade(){
        return view('portals.registrar.grades');
    }
    public function evaluation(){
        return view('portals.registrar.evaluations');
    }
    public function announcement(){
        return view('portals.registrar.announcement');
    }
    public function students(){
        return view('portals.registrar.students')
                    ->with('students', StudentsRecords::all());
    }
    public function student($id){
        return view('portals.registrar.student')
                    ->with('history', StudentsRecords::find($id));
    }
}
