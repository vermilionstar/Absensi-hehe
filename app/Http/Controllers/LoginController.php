<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use  Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('home.user.login');
    
    }
    public function login(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/');
        
        }else{
            return redirect('/login')->with('error','maaf username dan password anda salah');
        }
    }
    public function logout(){
        Auth::logout();
        return view('home.user.login');
    }
}
