<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('displayname')->nullable();
            $table->string('role');
            $table->string('note')->nullable();
            $table->tinyInteger('active');
            $table->tinyInteger('confirmed')->nullable();
            $table->tinyInteger('deleted');
            $table->tinyInteger('noip_login_enabled')->nullable();
            $table->string('password')->nullable();
            $table->string('access_key')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
