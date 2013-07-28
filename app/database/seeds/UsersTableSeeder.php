<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('users')->delete();

        $users = array(
        	'group_id' => 1,
        	'name' => 'prueba',
        	'email' => 'prueba@prueba.com',
        	'password' => Hash::make('prueba'),
        	'username' => 'prueba',
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}