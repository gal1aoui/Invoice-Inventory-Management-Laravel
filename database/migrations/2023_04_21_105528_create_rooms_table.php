<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->index('clients')->nullable();
            $table->string('name');
            $table->decimal('purchase_price', 15, 2)->default('0.00');
            $table->decimal('selling_price', 15, 2)->default('0.00');
            $table->integer('adults_number');
            $table->integer('kids_number');
            $table->integer('number');
            $table->string('type');
            $table->string('room_formula');
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
        Schema::dropIfExists('rooms');
    }
}
