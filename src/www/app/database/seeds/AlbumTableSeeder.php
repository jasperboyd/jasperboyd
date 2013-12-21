<?php

class AlbumTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('albums')->truncate();

		$album = array(
				'title' => 'Shut Off The Fan!',
				'artist' => 'The Halfs'
		);

		// Uncomment the below to run the seeder
		 DB::table('albums')->insert($album);
	}

}
