<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\newnotif;
use Illuminate\Support\Facades\Notification;

class Task2Controller extends Controller
{
    public function list_tasks(){
        $tasks= task::all();
        return view('tasks.tasks',compact('tasks'));
    }

    public function ajouter_task(){
        return view('tasks.ajouter_task');
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


        $users= User::all();
        $user_created= auth()->user()->name;
        Notification::send($users,new newnotif($tasks->id,$user_created,$tasks->type));
        return redirect('/tasks')->with('status',' task ajouter avec succes.');

    }

    public function delete_task($id){
        $task = task :: find($id);
        $task-> delete();
        return redirect('/tasks')->with('status',' task suprimer avec succes.');
    }
}
