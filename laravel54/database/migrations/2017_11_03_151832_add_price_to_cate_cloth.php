<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceToCateCloth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cate_cloth', function (Blueprint $table) {
            $table->integer('size');
            $table->integer('weight');
            $table->string('color');
            $table->string('fabric');
            $table->string('fabric');
            $table->string('style');
            $table->string('season');
            $table->string('crowd');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cate_cloth', function (Blueprint $table) {
            //
        });
    }
}
