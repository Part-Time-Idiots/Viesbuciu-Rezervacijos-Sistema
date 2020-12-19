<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('web');
            $table->string('communication');
            $table->double('rating');
            $table->boolean('animals');
            $table->integer('agerestriction');
            $table->unsignedBigInteger('address_id');
            //$table->foreign('address_id')->references('id')->on('addresses');
            $table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('hotels');
    }
}
