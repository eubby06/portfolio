<?php

class ClientTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('clients')->delete();
		
		Client::create(array(
			'id' 			=> 1,
			'name' 			=> 'Apple',
			'address' 		=> 'California USA',
			'website' 		=> 'www.apple.com.sg',
			'description' 	=> 'Apple is founded by Steve Jobs in 1986.',
			'status' 		=> 'active',
			'created_at' 	=> date('Y-m-d H:i:s'),
			'updated_at' 	=> date('Y-m-d H:i:s')
		));
	}
}
