<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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



Route::post('search','App\Http\Controllers\Reservations@search');























//Vartotoju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 100 EILUTES !!!!!!!!!!!!!

 
//Route::get('/profile', 'UserController@profile');


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/edit/user', [UserController::class, 'edit'])->name('user.edit');
Route::post('/edit/user', [UserController::class, 'update'])->name('user.update');

Route::get('/user/reservations', [UserController::class, 'reservations'])->name('user.reservations');

































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
Route::get('/review', function () {
    return view('review');
});
Route::get('/hotelReview', function () {
    return view('hotelReview');
});
Route::get('/usersReviews', function () {
    return view('usersReviews');
});
Route::get('/editReview', function () {
    return view('editReview');
});
Route::get('/commentReply', function () {
    return view('commentReply');
});
Route::get('/addReview', function () {
    return view('addReview');
});










































//Viesbuciu posistemei