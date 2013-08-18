<?php

class GroupPermTableSeeder extends Seeder {

    public function run()
    {
        $groupPerm = array(
            0 => array (
        	    'group_id' => 2,
              'perm_id' => 2,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
            1 => array(
              'group_id' => 3,
              'perm_id' => 1,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
            2 => array(
              'group_id' => 3,
              'perm_id' => 2,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
            3 => array(
              'group_id' => 3,
              'perm_id' => 3,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
            ),
        );

        DB::table('group_perm')->insert($groupPerm);
    }

}