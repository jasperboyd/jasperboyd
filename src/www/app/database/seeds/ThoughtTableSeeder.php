<?php

class ThoughtTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('thoughts')->truncate();

		$thought = array(
			'title' => 'Sample Thought', 
			'body' => 'Something that I thought about at some time.'
		);

		// Uncomment the below to run the seeder
		 DB::table('thoughts')->insert($thought);
	}

}
