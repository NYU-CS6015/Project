<?php

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->longText('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->integer('phoneno');
            $table->integer('zipcode');
            $table->string('image');
            $table->longText('quote');
            $table->string('status');
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
        Schema::drop('users');
    }
}