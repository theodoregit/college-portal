<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RegistrarLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:registrar', ['except' => ['logout']]);
    }
    public function showLoginForm(){
        return view('auth.registrar-login');
    }
    
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if(Auth::guard('registrar')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            
            return redirect()->intended(route('portals.registrar.index'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
                
        
    }

    public function logout()
    {
        Auth::guard('registrar')->logout();
        return redirect('/');
    }
}
