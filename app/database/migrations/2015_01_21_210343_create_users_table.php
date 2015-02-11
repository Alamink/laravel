<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()

	{
         Schema::create('users', function( $table) {
              $table->increments('id');
              $table->string('first_name');
              $table->string('last_name');
              $table->string('username');
              $table->string('password');
              $table->string('email')->unique;
             $table->string('remember_token',100);});

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
