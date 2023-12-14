<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        return view('auth.loginadmin');
    }

    function prosesloginadmin(Request $request)
    {
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password'=> $request->password])){
            return redirect('dashboard');
        }else{
            return redirect('/')->with(['warning' =>'Username atau password salah']);
        }
    }

    function logoutadmin(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    function loginalumni(){
        return view('auth.loginalumni');
    }

    function prosesloginalumni(Request $request){
        if(Auth::guard('alumnis')->attempt(['nisn' => $request->nisn, 'password' => $request->password])){
            return redirect('landingpage');
        }else{
            return redirect('loginalumni')->with(['warning' => 'nisn atau password salah']);
        }
    }
    function logoutalumni(){
        Auth::guard('alumnis')->logout();
        return redirect('/landingpage');
    }
}
