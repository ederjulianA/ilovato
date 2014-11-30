<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
			$username = $faker->name;

			User::create([
				'username'	=>	$username,
				'email'		=>	$faker->email,
				'password'	=>	\Hash::make(123456789),
				'rol'		=>	1,
				'img'		=>	'img/users/default.jpg',

			]);
		}
	}

}