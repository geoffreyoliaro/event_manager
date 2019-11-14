<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_updates', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('username');
            $table->string('email');
            $table->integer('regularSeats');
            $table->integer('vipSeats');
            $table->integer('invoice')->nullable();



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
        Schema::dropIfExists('event_updates');
    }
}
