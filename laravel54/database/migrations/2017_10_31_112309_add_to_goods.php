<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->string('goods_name');
            $table->integer('goods_brand');
            $table->integer('goods_category');
            $table->integer('goods_count');
            $table->integer('now_price');
            $table->integer('old_price');
            $table->integer('goods_weight');
            $table->integer('goods_size');
            $table->integer('goods_sort');
            $table->integer('up_time');
            $table->integer('down_time');
            $table->string('goods_img');
            $table->string('goods_color');
            $table->string('goods_text');
            $table->tinyInteger('status');
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
        Schema::table('goods', function (Blueprint $table) {
            //
        });
    }
}
