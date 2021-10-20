<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->integer('bus_id')->unsigned()->nullable();
            $table->string('state');
            $table->string('city');
            $table->time('start');
            $table->time('end');
            $table->string('day');
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
        Schema::dropIfExists('students');
    }
}
