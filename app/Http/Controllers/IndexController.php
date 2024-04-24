<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\reservation;
use App\Models\task;
use App\Models\invoice;

class IndexController extends Controller
{
    public function index(){
        $clientCount = Client::count();
        $reservationCount = Reservation::count();
        $taskCount = Task::count();
        $invoiceCount = Invoice::count();

        return view('home.app', [
            'clientCount' => $clientCount,
            'reservationCount' => $reservationCount,
            'taskCount' => $taskCount,
            'invoiceCount' => $invoiceCount,
        ]);
    }
}
