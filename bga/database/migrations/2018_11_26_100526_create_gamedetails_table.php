<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamedetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('table');
            $table->integer('round');
            $table->integer('playtime');
            $table->text('description');
            $table->string('user01');
            $table->integer('points01');
            $table->string('user02');
            $table->integer('points02');
            $table->string('user03');
            $table->integer('points03');
            $table->string('user04');
            $table->integer('points04');
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
        Schema::dropIfExists('gamedetails');
    }
}
