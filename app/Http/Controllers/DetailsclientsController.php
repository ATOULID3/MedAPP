<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\details;
use Illuminate\Http\Request;

class DetailsclientsController extends Controller
{
    public function details(){
        $details= details::all();
        return view('details.details_clients',compact('details'));
    }
    public function ajouter_details(){
        $clients= client::all();
        return view('details.ajouter_details',compact('clients'));
    }
    public function ajouterr_details(Request $request ){
        $request->validate([
            'client'=>'required',
            'cin'=>'required',
            'radio'=>'required',
            'pdf'=>'required',
            'phot'=>'required',
            'fil'=>'required',
        ]);

        $details = new Details();
        $details->client = $request->client;
        $details->cin = $request->cin;
        $details->radio = $request->radio;
        $details->pdf = $request->pdf;
        $details->phot = $request->phot;
        $details->fil = $request->fil;
        $details->save();
        return redirect('/details_clients')->with('status',' details ajouter avec succes.');

    }
}
