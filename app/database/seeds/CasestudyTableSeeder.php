<?php

class CasestudyTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('case_studies')->delete();
		
		CaseStudy::create(array(
			'id' 				=> 1,
			'project_id'		=> 1,
			'client_id'			=> 1,
			'how_we_helped' 	=> 'We just helped apple.',
			'what_we_did' 		=> 'nothing',
			'created_at' 	=> date('Y-m-d H:i:s'),
			'updated_at' 	=> date('Y-m-d H:i:s')
		));
	}
}
