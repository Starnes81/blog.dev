<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// DB::table('users')->delete();

		$user = new User();
        $user->email = 'studen@codeup.com';
        $user->password = Hash::make('adminPass1234!');
        $user->save();
	}
}