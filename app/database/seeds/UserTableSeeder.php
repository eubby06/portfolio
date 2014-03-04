<?php

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();
		
		User::create(array(
			'id' 			=> 1,
			'username' 		=> 'miguel',
			'email' 		=> 'migs44@gmal.com',
			'password' 		=> Hash::make('admin'),
			'role' 			=> 'user',
			'created_at' 	=> date('Y-m-d H:i:s'),
			'updated_at' 	=> date('Y-m-d H:i:s')
		));
	}
}
