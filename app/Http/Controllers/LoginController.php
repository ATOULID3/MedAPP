<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    public function showlogin(){
        return view("login.login");
    }
    public function login_trait(Request $request){
        $email = $request-> email;
        $password= $request-> password;
        $credentials= ['email'=>$email,"password"=>$password];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/index');

        }else{
            return back()->withErrors([
                'email'=>'email ou pass incorrect'
            ])->onlyInput('email');
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login') ;
    }
}
