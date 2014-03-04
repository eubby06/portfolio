<?php 

class ProjectTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('projects')->delete();
		
		Project::create(array(
			'id' 			=> 1,
			'client_id'		=> 1,
			'case_study_id'	=> 1,
			'type' 			=> 'website',
			'status' 		=> 'shown',
			'description' 	=> 'Apple amazing website.',
			'banner' 		=> 'apple.jpg',
			'created_at' 	=> date('Y-m-d H:i:s'),
			'updated_at' 	=> date('Y-m-d H:i:s')
		));
	}
}
