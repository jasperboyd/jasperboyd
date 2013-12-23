<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->text('title'); 
			$table->text('summary')->nullable; 
			$table->longtext('more_info');
			$table->integer('service_id');
			$table->integer('user_id'); 
			$table->integer('status')->default(0); 
			$table->binary('design_elements')->nullable; 
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
		Schema::drop('orders');
	}

}
