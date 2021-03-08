<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\StudentsHistory;

class StudentLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:student', ['except' => ['logout']]);
    }
    public function showLoginForm(){
        return view('auth.student-login');
    }
    
    public function login(Request $request){
        $this->validate($request, [
            'idnumber' => 'required',
            'password' => 'required|min:6'
        ]);
        
        if(Auth::guard('student')->attempt(['idnumber' => $request->idnumber, 'password' => $request->password], $request->remember)){
            
            return redirect()->intended(route('portals.student.index'))
                                ->with('test', 'test');
        }
        return redirect()->back()->withInput($request->only('idnumber', 'remember'));
                
        
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/');
    }
}
