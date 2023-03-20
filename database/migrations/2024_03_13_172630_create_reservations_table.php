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
        $table->string('name');
        $table->string('description');
        $table->boolean('used')->default(false);
        $table->string('hotel');
        $table->string('email');
        $table->dateTime('start_time');
        $table->dateTime('end_time');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('reservations');
}
}
