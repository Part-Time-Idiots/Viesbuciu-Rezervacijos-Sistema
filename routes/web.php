<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.profile');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/edit', [UserController::class, 'update'])->name('user.update');

Route::get('/user/reservations', [UserController::class, 'reservations'])->name('user.reservations');






























//Rezervaciju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 150 EILUTES !!!!!!!!!!!!!
Route::get('/clientreservations', function () {
    return view('reservations/clientreservations');
});

Route::get('/findreservation', function () {
    return view('reservations/findreservation');
});

Route::get('/editreservation', function () {
    return view('reservations/editreservation');
});

Route::get('/roominformation', function () {
    return view('roominformation');
});

Route::post('search','App\Http\Controllers\ReservationsController@search');
































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
Route::get('/hotels', function () {
    return view('hotel/hotels');
});
Route::get('/edithotel', function () {
    return view('hotel/edit');
});
Route::get('/removehotel', function () {
    return view('hotel/remove');
});
Route::get('/createhotel', function () {
    return view('hotel/create');
});
Route::get('/viewhotel', function () {
    return view('hotel/view');
});
Route::get('/findhotel', function () {
    return view('hotel/find');
});

Route::get('/reports', function () {
    return view('report/reports');
});
Route::get('/createreport', function () {
    return view('report/create');
});
Route::get('/viewreport', function () {
    return view('report/view');
});

Route::get('/m_reservations', function () {
    return view('managerReservations/manreservations');
});
Route::get('/m_viewres', function () {
    return view('managerReservations/view');
});
Route::get('/m_createres', function () {
    return view('managerReservations/create');
});
Route::get('/m_editres', function () {
    return view('managerReservations/edit');
});
Route::get('/m_removeres', function () {
    return view('managerReservations/remove');
});