<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
	public function run()
	{
		
        DB::table('users')->delete();
	    User::create(array(
	        'name'     => 'Ricardo Berrospi',
	        'email'    => 'ricardo.Berrospi@tecsup.edu.pe',
	        'password' => Hash::make('awesome'),
	    ));

	}
}