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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});



Auth::routes();

Route::post('search','App\Http\Controllers\Reservations@search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









//Vartotoju posistemei

















































//Rezervaciju posistemei
Route::get('/clientreservations', function () {
    return view('clientreservations');
});

Route::get('/findreservation', function () {
    return view('findreservation');
});

Route::get('/editreservation', function () {
    return view('editreservation');
});

Route::post('search','App\Http\Controllers\Reservations@search');














































//Atsiliepimu posistemei

















































//Viesbuciu posistemei