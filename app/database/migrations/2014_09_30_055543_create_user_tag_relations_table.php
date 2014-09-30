<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTagRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('user_tag_relations', function($table)
    {
      $table->engine = 'InnoDB';
      $table->integer('user_id');
      $table->integer('tag_id');
      $table->timestamps();
      $table->primary(array('user_id', 'tag_id'));
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('user_tag_relations');
	}

}
