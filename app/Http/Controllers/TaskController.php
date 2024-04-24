<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Models\profile;

class TaskController extends Controller
{
    public function list_tasks(){
        $profiles= profile::all();
        $tasks= task::all();
        return view('profile',compact('tasks'),compact('profiles'));
    }

    public function ajouter_task(){
        return view('profile');
    }
    public function ajouter_task_traitment(Request $request ){
        $request->validate([
            'type'=>'required',
            'message'=>'required',
            'assigned'=>'required',
            'date'=>'required',
        ]);

        $tasks = new Task();
        $tasks->type = $request->type;
        $tasks->message = $request->message;
        $tasks->assigned = $request->assigned;
        $tasks->date = $request->date;
        $tasks->save();
        return redirect('/profile');

    }

    public function delete_task($id){
        $task = task :: find($id);
        $task-> delete();
        return redirect('/profile');
    }




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
