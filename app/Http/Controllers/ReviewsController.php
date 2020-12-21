<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class ReviewsController extends Controller
{
   public function showHotels(Request $req) {

        $hotels = DB::select('select id,name from hotels');
        
        return view('responses/review' ,['hotels'=>$hotels]);

   }
   public function getHotelReviews($id) {
     // "'.$roomid.'"'

      $str = 'select * from reviews inner join users on users.id = reviews.user_id where hotel_id = '.$id.'';
      $vies = 'select name from hotels where hotels.id = '.$id;
      $reviews = DB::select($str);
      $hotel = DB::select($vies);
      
      return view('responses/hotelReview',['reviews'=>$reviews,'id'=>$id,'hotel'=>$hotel]);
   }
   public function addReview(Request $req) {

      $ivertis = $_POST['ivertinimas'];
      $comment = $_POST['comment'];
      $id = request('id', 1);
      $user = User::find(Auth::user()->id);
      $userID  = $user->id;
      $str = 'insert into reviews (rating,clientcomment,hotelcomment,createdate,responsedate,hotel_id,user_id,hoteladmin_id) 
      values ('.$ivertis.',"'.$comment.'",NULL,NOW(),NULL,'.$id.', '.$userID.',NULL)';
      // $insert = DB::insert('insert into reviews (rating,clientcomment,hotelcomment,createdate,responsedate,hotel_id,user_id,hoteladmin_id) 
      $insert = DB::insert($str);
      // values ('.$ivertis.',"'.$comment.'",NULL,NOW(),NULL,'.$id.', '.$userID.',NULL)');
      return redirect('hotelReview/'.$id);
   }
   public function usersReviews(Request $req) {

      $user = User::find(Auth::user()->id);
      $userID  = $user->id;
      $str = 'select reviews.id AS reviewsId, name, reviews.rating AS usersRating, clientcomment from reviews inner join hotels on reviews.hotel_id = hotels.id where user_id='.$userID;
      $reviews = DB::select($str);
      return view('responses/usersReviews',['reviews'=>$reviews]);
      
   }
   public function deleteUsersReview(Request $req) {
            $id = $_POST['reservationid'];
            $str = 'delete from reviews where id = '.$id;
            $delete = DB::delete($str);

            return back()->withInput();

      
   }
   public function editReview(Request $req) {
      $id = $_POST['reservationid'];
      $str = 'select hotels.name,reviews.id as reviewsID,reviews.rating,reviews.clientcomment from reviews inner join hotels on hotels.id = reviews.hotel_id where reviews.id = '.$id.'';
      $reviews = DB::select($str);
      return view('responses/editReview',['reviews'=>$reviews]);
   }
   public function updateReview(Request $req) {
      $id = $_POST['reservationid'];
      $rating = $_POST['ivertinimas'];
      $comment = $_POST['comment'];
      $str = 'update reviews set rating = '.$rating.', clientcomment = "'.$comment. '" where id = '.$id;
      $update = DB::update($str);
      return redirect('/usersReviews');

   }
}