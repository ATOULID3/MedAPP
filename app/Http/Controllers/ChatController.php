<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chat;

class ChatController extends Controller
{
    public function list_chats(){
        $chats=chat::all();
        return view('chat.chat',compact('chats'));
    }
    public function show_chat(){
        return view('chat.chat');
    }
    public function ajouter_chat_traitment(Request $request){
        $request->validate([
            'message'=>'required',
        ]);

        $chats = new Chat();
        $chats->message = $request->message;
        $chats->save();
        return redirect('/chat');
    }
}
