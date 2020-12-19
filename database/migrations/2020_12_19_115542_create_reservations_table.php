<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('reservationsubmissiondate');
            $table->dateTime('reservationstart');
            $table->dateTime('reservationend');
            $table->string('status');
            $table->integer('adultcount');
            $table->integer('childcount');
            $table->boolean('breakfast');
            $table->string('preferences');
            $table->boolean('carplace');
            $table->boolean('prepayment');

            $table->unsignedBigInteger('user_id');
           // $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('room_id');
          //  $table->foreign('room_id')->references('id')->on('rooms');

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
        Schema::dropIfExists('reservations');
    }
}
