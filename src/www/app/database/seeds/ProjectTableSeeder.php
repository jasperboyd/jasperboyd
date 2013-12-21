<?php

class ProjectTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('projects')->truncate();

		$project = array(
			'title' => 'Musitect', 
			'description' => 'A toolkit for Songwriters',
			'project_url' => 'http://www.musitect.com'
		);

		// Uncomment the below to run the seeder
		DB::table('projects')->insert($project);
	}

}
