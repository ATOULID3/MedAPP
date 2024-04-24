<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    public function list_clients(){
        $clients= client::all();
        return view('clients.clients',compact('clients'));
    }

    public function ajouter_client(){
        return view('clients.ajouter_client');
    }
    public function ajouterr_client_traitmentt(Request $request ){
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);

        $clients = new Client();
        $clients->name = $request->name;
        $clients->age = $request->age;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->address = $request->address;
        $clients->save();
        return redirect('/clients')->with('status',' client ajouter avec succes.');

    }
    public function update_client($id) {
        $clients = client :: find($id);
        return view('clients.edit_client',compact('clients'));
    }
    public function update_client_traitment(Request $request){
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $clients = Client:: find($request->id);
        $clients->name = $request->name;
        $clients->age = $request->age;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->address = $request->address;
        $clients->update();
        return redirect('/clients')->with('status',' client modifier avec succes.');
    }
    public function show(Client $client){
        return view('clients\show_clients',compact('clients'));
    }
    public function delete_client($id){
        $client = client :: find($id);
        $client-> delete();
        return redirect('/clients')->with('status',' Etudiant suprimer avec succes.');
    }
}
