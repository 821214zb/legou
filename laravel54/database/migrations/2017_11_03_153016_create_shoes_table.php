<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_shoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size');
            $table->integer('weight');
            $table->string('color');
            $table->string('fabric');
            $table->string('style');
            $table->string('season');
            $table->string('crowd');
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
        Schema::dropIfExists('cate_shoes');
    }
}
