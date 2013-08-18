<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class GroupPerm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_perm', function(Blueprint $table) {
			if (App::environment() == 'testing') {
                $table->string('codeception_added_auto_submit');
            }
            $table->integer('group_id');
            $table->integer('perm_id');
            $table->timestamps();	
            $table->datetime('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_perm');
	}

}
