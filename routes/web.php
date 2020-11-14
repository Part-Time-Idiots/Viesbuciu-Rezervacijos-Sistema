<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/user', 'UserController@user');
Route::get('/user', 'UserController@user');


Auth::routes();

Route::post('search','App\Http\Controllers\Reservations@search');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);



















//Vartotoju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 100 EILUTES !!!!!!!!!!!!!

















































//Rezervaciju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 150 EILUTES !!!!!!!!!!!!!
Route::get('/clientreservations', function () {
    return view('clientreservations');
});

Route::get('/findreservation', function () {
    return view('findreservation');
});

Route::get('/editreservation', function () {
    return view('editreservation');
});

Route::get('/roominformation', function () {
    return view('roominformation');
});

Route::post('search','App\Http\Controllers\Reservations@search');
































//Atsiliepimu posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 200 EILUTES !!!!!!!!!!!!!

















































//Viesbuciu posistemei