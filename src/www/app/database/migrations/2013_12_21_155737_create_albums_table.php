<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title'); 
			$table->string('artist'); 
			$table->string('release_date');
			$table->string('bandcamp_url')->nullable(); 
			$table->string('image_url')->nullable(); 
			$table->text('description')->nullable(); 
			$table->string('personnel');
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
		Schema::drop('albums');
	}

}
