<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('rating');
            $table->string('clientcomment');
            $table->string('hotelcomment');
            $table->datetime('createdate');
            $table->datetime('responsedate');
            $table->unsignedBigInteger('hotel_id');
            //$table->foreign('hotel_id')->references('id')->on('hotels');
            $table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('hoteladmin_id');
            //$table->foreign('hoteladmin_id')->references('id')->on('hotel_administrators');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
