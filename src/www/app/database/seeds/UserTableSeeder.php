<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$user = array(
			'first_name' => 'jasper', 
			'last_name' => 'boyd', 
			'email' => 'jboyd@clarku.edu', 
			'password' => 'root'
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($user);
	}

}
