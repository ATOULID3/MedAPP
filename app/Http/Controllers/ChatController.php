<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use App\Models\client;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function list_chats(){
        $chats=chat::all();
        $clients=client::all();
        $users=User::all();
        return view('chat.chat',compact('chats','users','clients'));
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
