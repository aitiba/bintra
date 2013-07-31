<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $users = array(
            'group_id' => 1,
        	'name' => 'prueba',
        	'email' => 'prueba@prueba.com',
        	'password' => Hash::make('prueba'),
        	'username' => 'prueba',
        );

        DB::table('users')->insert($users);
    }

}