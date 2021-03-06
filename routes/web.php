<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
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
Auth::routes(['verify' => true]);

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.profile');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/profile/{id}', [UserController::class, 'deleteUser'])->name('user.delete');

Route::get('/user/reservations', [UserController::class, 'reservations'])->name('user.reservations');




























//Rezervaciju posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 150 EILUTES !!!!!!!!!!!!!

// Route::get('/clientreservations', function () {
//    return view('reservations/clientreservations');
// });
//Route::get('clientreservations','App\Http\Controllers\ReservationsController@findReservations');

//Route::get('/clientreservations', function () {
 //   return view('reservations/clientreservations');
//});
Route::get('clientreservations','App\Http\Controllers\ReservationsController@findReservations')->name('reservations.clientreservations');

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

//Route::get('/email', function(){
 //   Mail::to('email@gmail.com')->send(new ReservationMail());
 //   return new ReservationMail();
//});














//Atsiliepimu posistemei PO PAKEITIMU PATAISYTI KAD SEKANTI POSISTEME PRASIDETU NUO 200 EILUTES !!!!!!!!!!!!!
// Route::get('/review', function () {
//     return view('review');
// });
Route::get('hotelReview/{id}', 'App\Http\Controllers\ReviewsController@getHotelReviews');
// Route::get('/hotelReview',function()
// {
//     return view()
// });
// Route::get('/usersReviews', function () {
//     return view('usersReviews');
// });
Route::get('/usersReviews', 'App\Http\Controllers\ReviewsController@usersReviews');
Route::get('/editReview', function () {
    return view('editReview');
});
Route::get('/commentReply', function () {
    return view('commentReply');
});
Route::get('/addReview/{id}', function ($id) {
    
    return view('responses/addReview',['id'=>$id]);
});
Route::get('/addReview', function () {
    
    return view('responses/addReview');
});
Route::get('review','App\Http\Controllers\ReviewsController@showHotels');
Route::post('addReview','App\Http\Controllers\ReviewsController@addReview');
Route::post('deletereview','App\Http\Controllers\ReviewsController@deleteUsersReview');
Route::post('editreview','App\Http\Controllers\ReviewsController@editReview');
Route::post('updatereview','App\Http\Controllers\ReviewsController@updateReview');




























//Viesbuciu posistemei
Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/viewhotel/{id}', [HotelController::class, 'view']);
Route::get('/edithotel/{id}', [HotelController::class, 'editForm']);
Route::post('/edithotel/{id}/edit', [HotelController::class, 'edit']);
Route::get('/removehotel/{id}', [HotelController::class, 'remove']);
Route::get('/hotelconfirmdel/{id}', [HotelController::class, 'askConfirm']);
Route::get('/hotelconfirmcancel', [HotelController::class, 'confirmCancel']);
Route::get('/createhotel', [HotelController::class, 'creationForm']);
Route::post('/createhotel', [HotelController::class, 'create']);

Route::get('/findhotel', [HotelController::class, 'find']);
Route::post('/foundhotels', [HotelController::class, 'found']);

Route::get('/reports', [HotelController::class, 'reportsIndex']);
Route::get('/viewreport/{id}', [HotelController::class, 'reportsView']);
Route::get('/createreport', [HotelController::class, 'reportForm']);
Route::post('/createreport', [HotelController::class, 'createReport']);

Route::get('/rooms', [HotelController::class, 'roomIndex']);
Route::get('/viewroom/{id}', [HotelController::class, 'viewRoom']);
Route::get('/editroom/{id}', [HotelController::class, 'editRoomForm']);
Route::post('/editroom/edit/{id}', [HotelController::class, 'editRoom']);
Route::get('/removeroom/{id}', [HotelController::class, 'removeRoom']);
Route::get('/roomconfirmdel/{id}', [HotelController::class, 'askConfirmRoom']);
Route::get('/roomconfirmcancel', [HotelController::class, 'confirmCancelRoom']);
Route::get('/createroom', [HotelController::class, 'creationRoomForm']);
Route::post('/createroom', [HotelController::class, 'createRoom']);