<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\reservation;

class ReservationController extends Controller
{
    public function list_reservation(){
        $reservations= reservation::all();
        return view('reservation.show',compact('reservations'));
    }

    public function ajouter_reservation(){
        $clients= client::all();
        return view('reservation.ajouter_reservation',compact('clients'));
    }
    public function ajout_reservation_traitment(Request $request ){
        $request->validate([
            'client'=>'required',
            'date_debut'=>'required',
            'avance'=>'required',
            'reste'=>'required',
        ]);

        $reservations = new Reservation();
        $reservations->client = $request->client;
        $reservations->date_debut = $request->date_debut;
        $reservations->avance = $request->avance;
        $reservations->reste = $request->reste;
        $reservations->save();
        return redirect('/reservation')->with('status',' reservation ajouter avec succes.');

    }
    public function update_reservation($id) {
        $clients= client::all();
        $reservations = reservation :: find($id);
        return view('reservation.update_reservation',compact('reservations'),compact('clients'));
    }
    public function upda_reservation_traitment(Request $request){
        $request->validate([
            'client'=>'required',
            'date_debut'=>'required',
            'avance'=>'required',
            'reste'=>'required',
        ]);
        $reservations = Reservation:: find($request->id);
        $reservations->client = $request->client;
        $reservations->date_debut = $request->date_debut;
        $reservations->avance = $request->avance;
        $reservations->reste = $request->reste;
        $reservations->update();
        return redirect('/reservation')->with('status',' reservation modifier avec succes.');
    }
    // public function show(Client $client){
    //     return view('clients\show_clients',compact('clients'));
    // }
    public function delete_reservation($id){
        $reservation = reservation :: find($id);
        $reservation-> delete();
        return redirect('/reservation')->with('status',' reservation suprimer avec succes.');
    }
}
