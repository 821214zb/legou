<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToGopo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gopos', function (Blueprint $table) {
            $table->integer('posid_id');
            $table->integer('goods_id');
            $table->string('goods_img');
            $table->string('goods_title');
            $table->string('goods_name');
            $table->string('goods_sort');
            $table->integer('goods_status');
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
        Schema::table('gopos', function (Blueprint $table) {
            //
        });
    }
}
