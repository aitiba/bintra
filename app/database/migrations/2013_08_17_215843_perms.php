<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Perms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perms', function(Blueprint $table) {
			$table->increments('id');
			 if (App::environment() == 'testing') {
                $table->string('codeception_added_auto_submit');
            }
            $table->string('name');
            $table->string('module');
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
		Schema::drop('perms');
	}

}
