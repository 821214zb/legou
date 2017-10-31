<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToLunbo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lunbos', function (Blueprint $table) {
            $table->string('img_name');
            $table->integer('img_sort');
            $table->integer('img_status');
            $table->string('img_url');
            $table->string('img_text');
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
        Schema::table('lunbos', function (Blueprint $table) {
            //
        });
    }
}
