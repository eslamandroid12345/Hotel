<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{

    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('city_from',100);
            $table->string('city_to',100);
            $table->time('trip_time');
            $table->integer('children');
            $table->date('date_arrive');
            $table->date('date_leave');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
