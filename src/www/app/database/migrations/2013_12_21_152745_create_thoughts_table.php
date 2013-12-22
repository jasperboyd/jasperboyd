<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThoughtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thoughts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title'); 
			$table->string('subtitle')->nullable(); 
			$table->text('summary')->nullable(); 
			$table->string('image_url')->nullable(); 
			$table->longtext('body'); 
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
		Schema::drop('thoughts');
	}

}
