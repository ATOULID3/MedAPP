<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function list_register(){
        return view('login.register');
    }
    public function ajouter_register_traitment(Request $request){
        $request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=>'required|confirmed',
        ]);


        $registers = new user();
        $registers->email = $request->email;
        $registers->name = $request->name;
        $registers->password = $request->password;
        $registers->save();
        return redirect('/login');
    }
}
