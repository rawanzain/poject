<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->string('car_image')->nullable();
            $table->integer('lience');
            $table->string('model');
            $table->string('place');
            $table->string('state');
            $table->string('city');
            $table->string('color');
            $table->double('price');
            $table->integer('quantity');
            $table->time('start');
            $table->time('end');
            $table->string('specification')->nullable();

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
        Schema::dropIfExists('drivers');
    }
}
