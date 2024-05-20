<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\calendar;

class CalendarController extends Controller
{
    public function list_calendar(){
        $calendars= calendar::all();
        return view('calendar.calendar',compact('calendars'));
    }

    public function ajouter_calendar(){
        return view('calendar.calendar');
    }
    public function ajouter_calendar_traitment(Request $request ){
        $request->validate([
            'ename'=>'required',
            'edate'=>'required',
            'edesc'=>'required',
            'ecolor'=>'required',
            'eicon'=>'required',
        ]);

        $calendars = new Calendar();
        $calendars->ename = $request->ename;
        $calendars->edate = $request->edate;
        $calendars->edesc = $request->edesc;
        $calendars->ecolor = $request->ecolor;
        $calendars->eicon = $request->eicon;
        $calendars->save();
        return redirect('/calendar');

    }
    public function show_calendar(){
        $calendars= calendar::all();
        return view("calendar.show_calendar",compact('calendars'));
    }
    public function delete_calendar($id){
        $calendars = calendar :: find($id);
        $calendars-> delete();
        return redirect('/calendar')->with('status',' calendar suprimer avec succes.');
    }
}
