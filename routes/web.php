<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Task2Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatusersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DetailsclientsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// *****************login*********************************
Route::get('/login',[LoginController::class,'showlogin'])->name('login');
Route::post('login/trait',[LoginController::class,'login_trait'])->name('loginn');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[RegisterController::class,'list_register']);
// Route::get('/ajouter_register',[RegisterController::class,'ajouter_register']);
Route::post('register/traitment',[RegisterController::class,'ajouter_register_traitment']);
Route::get('/forgot-password.html', function () {
    return view('login.forgot-password');
});
// **************************************************
Route::get('/', function () {
    return view('firstpage');
});
// ********************home******************************
Route::middleware('auth')->group(function(){

Route::get('/index',[IndexController::class,'index']);
Route::get('/faq.html', function () {
    return view('help');
});
Route::get('/index2.html', function () {
    return view('home.index2');
});
// ********************users******************************
Route::get('/users',[UsersController::class,'users']);
// ********************chatusers******************************
Route::get('/chatusers',[ChatusersController::class,'chatusers']);
Route::post('ajouter/chatusers',[ChatusersController::class,'ajouter_chatusers_traitment']);
Route::get('/delete_chatusers/{id}',[ChatusersController::class,'delete_chatusers']);
// ********************chart******************************
Route::get('/highchart.html', function () {
    return view('chart.highchart');
});
Route::get('/apexcharts.html', function () {
    return view('chart.apexcharts');
});
// ********************invoices******************************
Route::get('/invoices',[InvoicesController::class,'list_invoices']);
Route::get('/ajouter_invoice',[InvoicesController::class,'ajouter_invoice']);
Route::get('/list_invoices',[InvoicesController::class,'list_invoicess']);
Route::post('ajouterin/traitment',[InvoicesController::class,'ajouter_invoice_traitment']);
Route::get('/show_invoice/{id}',[InvoicesController::class,'show_invoice']);
Route::get('/delete_invoice/{id}',[InvoicesController::class,'delete_invoice']);
Route::get('/invoice_pdf/{id}',[InvoicesController::class,'pdf_invoice'])->name('invoice.pdf');
// ********************documentation******************************
Route::get('/color-settings.html', function () {
    return view('documentation.color-settings');
});
Route::get('/introduction.html', function () {
    return view('documentation.introduction');
});

// *****************clients*********************************
Route::get('/clients',[ClientController::class,'list_clients']);
Route::get('/ajouter_client',[ClientController::class,'ajouter_client']);
Route::post('ajouterr/traitmentt',[ClientController::class,'ajouterr_client_traitmentt']);
Route::get('/delete_client/{id}',[ClientController::class,'delete_client']);
Route::get('/update_client/{id}',[ClientController::class,'update_client']);
Route::post('update/traitment',[ClientController::class,'update_client_traitment']);
Route::get('/show_client/{id}',[ClientController::class,'show']);
// *****************details_clients*********************************
Route::get('/details_clients',[DetailsclientsController::class,'details']);
Route::get('/ajouter_details',[DetailsclientsController::class,'ajouter_details']);
Route::post('ajouter/details',[DetailsclientsController::class,'ajouterr_details']);

// *****************profiles*********************************
Route::get('/profile',[TaskController::class,'list_tasks']);
Route::get('/ajouter_task',[TaskController::class,'ajouter_task']);
Route::post('ajouter/traitment',[TaskController::class,'ajouter_task_traitment']);
Route::get('/delete_task/{id}',[TaskController::class,'delete_task']);

// *****************calendar*********************************
Route::get('/calendar',[CalendarController::class,'list_calendar']);
Route::get('/ajouter_task',[CalendarController::class,'ajouter_calendar']);
Route::post('calendar/traitment',[CalendarController::class,'ajouter_calendar_traitment']);
Route::get('/show_calendar',[CalendarController::class,'show_calendar']);

// *****************login*********************************
// Route::get('/login',[LoginController::class,'showlogin'])->name('login');
// Route::post('login/trait',[LoginController::class,'login_trait'])->name('loginn');
// Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// Route::get('/register',[RegisterController::class,'list_register']);
// // Route::get('/ajouter_register',[RegisterController::class,'ajouter_register']);
// Route::post('register/traitment',[RegisterController::class,'ajouter_register_traitment']);
// Route::get('/forgot-password.html', function () {
//     return view('login.forgot-password');
// });

// *****************chat*********************************
Route::get('/chat',[ChatController::class,'show_chat']);
Route::get('/chat',[ChatController::class,'list_chats']);
Route::post('ajouter/chat',[ChatController::class,'ajouter_chat_traitment']);


// *****************tasks*********************************
Route::get('/tasks',[Task2Controller::class,'list_tasks']);
Route::get('/ajouter_task',[Task2Controller::class,'ajouter_task']);
Route::post('ajouter/traitment',[Task2Controller::class,'ajouter_task_traitment']);
Route::get('/delete_task/{id}',[Task2Controller::class,'delete_task']);
// *****************prof*********************************
// Route::get('/profile',[ProfileController::class,'ajouter_profile']);
// Route::get('/profile',[ProfileController::class,'list_profile']);
// Route::get('/update_profile/{id}',[ProfileController::class,'update_profile']);
// Route::post('update/traitmenttt',[ProfileController::class,'update_profile_traitment']);



// *****************reservation*********************************
Route::get('/reservation',[ReservationController::class,'list_reservation']);
Route::get('/ajouter_reservation',[ReservationController::class,'ajouter_reservation']);
Route::post('ajout/traitment',[ReservationController::class,'ajout_reservation_traitment']);
Route::get('/delete_reservation/{id}',[ReservationController::class,'delete_reservation']);
Route::get('/update_reservation/{id}',[ReservationController::class,'update_reservation']);
Route::post('upda/traitment',[ReservationController::class,'upda_reservation_traitment']);
// Route::get('/show_client/{id}',[ClientController::class,'show']);

// *****************contact*********************************
Route::get('/contactUs',[ContactController::class,'contact'])->name('contact.form');
Route::post('/contactUss',[ContactController::class,'submitForm'])->name('contact.submit');




// Auth::routes();


});

