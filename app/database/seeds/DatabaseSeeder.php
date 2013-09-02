<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UsersTableSeeder');
		//$this->call('GroupsTableSeeder');
		$this->call('PermsTableSeeder');
		$this->call('GroupPermTableSeeder');
		$this->call('TweetsTableSeeder');
		$this->call('TriesTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('PencilsTableSeeder');
		$this->call('CalendarsTableSeeder');
		$this->call('CalendarsTableSeeder');
		$this->call('IdenticasTableSeeder');
		$this->call('BlogsTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('PencilsTableSeeder');
		$this->call('PencilsTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('CdsTableSeeder');
		$this->call('DvdsTableSeeder');
		$this->call('CassetesTableSeeder');
		$this->call('BolisTableSeeder');
		$this->call('BoligrafsTableSeeder');
		$this->call('BoligrafsTableSeeder');
		$this->call('BoligrafsTableSeeder');
		$this->call('BoligrafsTableSeeder');
		$this->call('IrcsTableSeeder');
		$this->call('DrivesTableSeeder');
		$this->call('CpusTableSeeder');
		$this->call('PcsTableSeeder');
		$this->call('PlaysTableSeeder');
		$this->call('SonisTableSeeder');
		$this->call('GamesTableSeeder');
		$this->call('GamesTableSeeder');
		$this->call('GamesTableSeeder');
		$this->call('NintendosTableSeeder');
		$this->call('DiaTableSeeder');
		$this->call('LetrasTableSeeder');
		$this->call('MusicasTableSeeder');
		$this->call('DjsTableSeeder');
		$this->call('DjautosTableSeeder');
		$this->call('DjautomatiksTableSeeder');
		$this->call('DjautomatiksTableSeeder');
		$this->call('AutosTableSeeder');
		$this->call('AutomasTableSeeder');
		$this->call('AutomataTableSeeder');
		$this->call('AursTableSeeder');
		$this->call('AurkezpenasTableSeeder');
		$this->call('AurkezpensTableSeeder');
		$this->call('AurkezpesTableSeeder');
		$this->call('AurkezpsTableSeeder');
		$this->call('AurkezsTableSeeder');
		$this->call('AurkesTableSeeder');
		$this->call('AurksTableSeeder');
		$this->call('AursTableSeeder');
		$this->call('AurkezpensTableSeeder');
		$this->call('AurkezpensTableSeeder');
		$this->call('AurkezpesTableSeeder');
		$this->call('AurkezpsTableSeeder');
		$this->call('AurkezsTableSeeder');
		$this->call('AurkesTableSeeder');
		$this->call('AurksTableSeeder');
	}

}