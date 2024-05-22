<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\details;
use Illuminate\Support\Str;
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
            'cin'=>'required|image',
            'radio'=>'required|image',
            'pdf'=>'required|image',
            'phot'=>'required|image',
            'fil'=>'required|image',
        ]);

        $details = new Details();
        $details->client = $request->client;
        if ($request->hasFile('cin')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->cin->extension();
            $request->cin->move(public_path('details'), $imageName);
            $details->cin = $imageName;
        }
        if ($request->hasFile('radio')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->radio->extension();
            $request->radio->move(public_path('details'), $imageName);
            $details->radio = $imageName;
        }
        if ($request->hasFile('pdf')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->pdf->extension();
            $request->pdf->move(public_path('details'), $imageName);
            $details->pdf = $imageName;
        }
        if ($request->hasFile('phot')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->phot->extension();
            $request->phot->move(public_path('details'), $imageName);
            $details->phot = $imageName;
        }
        if ($request->hasFile('fil')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->fil->extension();
            $request->fil->move(public_path('details'), $imageName);
            $details->fil = $imageName;
        }
        $details->save();
        return redirect('/details_clients')->with('status',' details ajouter avec succes.');

    }
}
