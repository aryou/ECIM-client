<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first', 32);
			$table->string('last', 32);
			$table->string('username', 32);
			$table->string('email', 320);
			$table->string('password', 64);
			$table->tinyInteger('has_two_factor')->default('0');
			$table->string('remember_token', 100)->nullable();			
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
		Schema::drop('user');
	}

}
