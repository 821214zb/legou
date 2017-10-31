<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToUseraddr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('useraddrs', function (Blueprint $table) {
            $table->string('uid');
            $table->string('user_name');
            $table->integer('user_phone');
            $table->string('pay_method');
            $table->string('province');
            $table->string('city');
            $table->string('region');
            $table->string('address');
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
        Schema::table('useraddrs', function (Blueprint $table) {
            //
        });
    }
}
