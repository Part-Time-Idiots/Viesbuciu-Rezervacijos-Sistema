<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;

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



























//Vartotoju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 100 EILUTES !!!!!!!!!!!!!

 
//Route::get('/profile', 'UserController@profile');


Auth::routes();

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.profile');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/delete', [UserController::class, 'deleteUser'])->name('user.delete');

Route::get('/user/reservations', [UserController::class, 'reservations'])->name('user.reservations');





























//Rezervaciju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 150 EILUTES !!!!!!!!!!!!!
//Route::get('/clientreservations', function () {
 //   return view('reservations/clientreservations');
//});
Route::get('clientreservations','App\Http\Controllers\ReservationsController@findReservations');
Route::get('/findreservation', function () {
    return view('reservations/findreservation');
});
//editreservation
Route::post('editreservation','App\Http\Controllers\ReservationsController@editReservation');
//retrieve data
Route::get('view-editedreservation','ReservationsController@editReservation');

//delete reservation
Route::post('deletereservation','App\Http\Controllers\ReservationsController@deleteReservation');
//retrieve data
Route::get('view-newreservations','ReservationsController@deleteReservation');

//update reservation
Route::post('updatereservation', 'App\Http\Controllers\ReservationsController@updateReservation');
Route::get('reservation-newresults','ReservationsController@updateReservation');

Route::post('roominformation', 'App\Http\Controllers\ReservationsController@roomData');
Route::get('room-results','ReservationsController@roomData');

Route::post('createrezervation', 'App\Http\Controllers\ReservationsController@createreservation');
Route::get('reservation-results','ReservationsController@createreservation');

Route::post('search','App\Http\Controllers\ReservationsController@search');
//retrieve data for searching reservations
Route::get('view-results','ReservationsController@search');



















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
Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/viewhotel/{id}', [HotelController::class, 'view']);
Route::get('/edithotel/{id}', [HotelController::class, 'edit']);
Route::get('/removehotel/{id}', [HotelController::class, 'remove']);
Route::get('/hotelconfirmdel/{id}', [HotelController::class, 'askConfirm']);
Route::get('/hotelconfirmcancel', [HotelController::class, 'confirmCancel']);
Route::get('/createhotel', [HotelController::class, 'creationForm']);
Route::post('/createhotel', [HotelController::class, 'create']);

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