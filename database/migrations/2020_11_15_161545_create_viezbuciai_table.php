<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViezbuciaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viezbuciai', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('webSite');
            $table->string('communication');
            $table->double('rating');
            $table->bool('acceptsPets');
            $table->int('ageRestriction');
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
