<?php
use AppHosting\Entities\User;
class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$password = \Hash::make('123456');
		User::create(array(	'id'=>1,
							'email' => 'me@renzocarpio.com',
							'password'=>$password,
							'rol_id' => 1
							)
		);
		User::create(array(	'id'=>2,
							'email' => 'adolfovega@gmail.com',
							'password'=>$password,
							'rol_id' => 2
							)
		);		
	}
}
