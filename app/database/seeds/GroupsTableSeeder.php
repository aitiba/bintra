<?php

class GroupsTableSeeder extends Seeder {

    public function run()
    {
        $groups = array(
            0 => array (
        	  'name' => 'admin',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
            1 => array(
              'name' => 'client',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),    
            ),
        );

        DB::table('groups')->insert($groups);
    }

}