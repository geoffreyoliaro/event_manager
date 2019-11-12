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
            $table->integer('event_id');
            $table->string('eventName');
            $table->string('eventLocation');
            $table->bigInteger('vipSeatsTaken');
            $table->bigInteger('regularSeatsTaken');
            $table->bigInteger('invoice');
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
