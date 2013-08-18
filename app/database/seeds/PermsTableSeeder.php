<?php

class PermsTableSeeder extends Seeder {

    public function run()
    {
        $perms = array(
            0 => array (
        	    'name' => 'add',
              'module' => 'project',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
            1 => array(
              'name' => 'edit',
              'module' => 'project',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),    
            ),
            2 => array(
              'name' => 'delete',
              'module' => 'project',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),    
            ),
        );

        DB::table('perms')->insert($perms);
    }

}