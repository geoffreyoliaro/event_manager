<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_records', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->string('eventName');
            $table->string('eventLocation');
            $table->bigInteger('vipSeatsAvailable');
            $table->bigInteger('vipPrice');
            $table->bigInteger('regularSeatsAvailable');
            $table->bigInteger('regularPrice');
            $table->string('promoImage');
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
        Schema::dropIfExists('event_records');
    }
}
