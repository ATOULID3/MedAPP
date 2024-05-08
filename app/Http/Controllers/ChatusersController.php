<?php

namespace App\Http\Controllers;

use App\Models\chatusers;
use Illuminate\Http\Request;

class ChatusersController extends Controller
{
    public function chatusers(){
        $chatusers= chatusers::all();
        return view('chatusers.chatusers',compact('chatusers'));
    }
    public function ajouter_chatusers_traitment(Request $request ){
        $request->validate([
            'from'=>'required',
            'to'=>'required',
            'subject'=>'required',
        ]);

        $chatusers = new Chatusers();
        $chatusers->from = $request->from;
        $chatusers->to = $request->to;
        $chatusers->subject = $request->subject;
        $chatusers->save();
        return redirect('/chatusers');
    }
    public function delete_chatusers($id){
        $chatuser = Chatusers :: find($id);
        $chatuser-> delete();
        return redirect('/chatusers');
    }
}
