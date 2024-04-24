<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\task;



class ProfileController extends Controller
{
    public function list_profile(){
        $profiles= profile::all();
        return view('profile',compact('profiles'));
    }
    public function update_profile($id) {
        $profiles = profile :: find($id);
        return view('profile',compact('profiles'));
    }
    public function update_profile_traitment(Request $request){
        $request->validate([
            'name'=>'required',

        ]);
        $profiles = Profile:: find($request->id);
        $profiles->name = $request->name;

        $profiles->update();
        return redirect('/profile')->with('status',' profile modifier avec succes.');
    }
}
