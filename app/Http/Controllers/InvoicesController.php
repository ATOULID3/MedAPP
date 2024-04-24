<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\invoice;
use PDF;
use Illuminate\Http\Request;



class InvoicesController extends Controller
{
    public function list_invoices(){
        return view('invoices.invoice',);
    }
    public function ajouter_invoice(){
        $clients= client::all();
        return view('invoices.ajouter_invoice',compact('clients'));
    }
    public function ajouter_invoice_traitment(Request $request){
        $request->validate([
            'client'=>'required',
            'date'=>'required',
            'accountno'=>'required',
            'code'=>'required',
            'due'=>'required',
        ]);

        $invoices = new Invoice();
        $invoices->client = $request->client;
        $invoices->date = $request->date;
        $invoices->accountno = $request->accountno;
        $invoices->code = $request->code;
        $invoices->due = $request->due;
        $invoices->save();
        return redirect('/invoices')->with('status',' invoice ajouter avec succes.');


    }
    public function list_invoicess(){
        $invoices= invoice::all();
        return view('invoices.list_invoices',compact("invoices"));
    }
    public function show_invoice($id){
        $invoices = invoice :: find($id);
        return view('invoices.show_invoice',compact('invoices'));
    }
    public function delete_invoice($id){
        $invoices = invoice :: find($id);
        $invoices-> delete();
        return redirect('/invoices.list_invoices')->with('status',' invoice suprimer avec succes.');
    }
    public function pdf_invoice($id){
        $invoices = invoice :: find($id);
        $pdf = PDF::loadView('invoices.pdf',compact('invoices'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('invoice.pdf');

    }
}
