<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->char('account');
            $table->char('nickname');
            $table->char('password');
            $table->integer('last_login_time');
            $table->integer('last_login_ip');
            $table->integer('login_count');
            $table->char('email');
            $table->char('remark');
            $table->integer('create_time');
            $table->integer('update_time');
            $table->integer('status');
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
        Schema::dropIfExists('admins');
    }
}
