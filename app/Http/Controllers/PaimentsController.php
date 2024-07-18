<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Paiment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PaimentsController extends Controller
{
    public function paiments(){
        $paiments = Paiment::all();
        return view ('paiments.paiments',compact('paiments'));
    }
    public function ajouter_paiments(){
        $clients=client::all();
        return view('paiments.ajouter_paiments',compact('clients'));
    }
    public function ajouterr_paiment(Request $request){
        $request->validate([
            'client'=>'required',
            'avance'=>'required',
            'date_avance'=>'required',
            'reste'=>'required',
            'date_reste'=>'required',
            'recut'=>'required',
        ]);

        $paiments = new Paiment();
        $paiments->client = $request->client;
        $paiments->avance = $request->avance;
        $paiments->date_avance = $request->date_avance;
        $paiments->reste = $request->reste;
        $paiments->date_reste = $request->date_reste;
        if ($request->hasFile('recut')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->recut->extension();
            $request->recut->move(public_path('details'), $imageName);
            $paiments->recut = $imageName;
        $paiments->save();
        return redirect('/paiments')->with('status',' paiments ajouter avec succes.');
        }
    }
    public function details_paiments($id) {
        $clients=client::all();
        $paiments = paiment :: find($id);
        return view('paiments.details_paiments',compact('paiments'),compact('clients'));
    }
    public function details_traitment(Request $request){
        $request->validate([
            'client'=>'required',
            'avance'=>'required',
            'date_avance'=>'required',
            'reste'=>'required',
            'date_reste'=>'required',
            'recut'=>'required',
        ]);
        $paiments = Paiment:: find($request->id);
        $paiments->client = $request->client;
        $paiments->avance = $request->avance;
        $paiments->date_avance = $request->date_avance;
        $paiments->reste = $request->reste;
        $paiments->date_reste = $request->date_reste;
        if ($request->hasFile('recut')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->recut->extension();
            $request->recut->move(public_path('details'), $imageName);
            $paiments->recut = $imageName;
        $paiments->update();
        return redirect('/paiments')->with('status',' paiments modifier avec succes.');
    }
}
}
