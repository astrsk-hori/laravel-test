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
    Schema::create('users', function($table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->text('name');
      $table->text('email');
      $table->timestamps();
      $table->softDeletes();
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
