<?php

Route::get('login',array('as' => 'user.login', 'uses' => 'UsersController@get_login'));
Route::post('login',array('as' => 'user.post_logint', 'uses' => 'UsersController@post_login'));

Route::group(array('before' => 'auth'), function(){

  Route::resource('users', 'UsersController');
  Route::get('logout',array('as' => 'user.logout', 'uses' => 'UsersController@get_logout'));

  Route::post('users/updateUsername',array('as' => 'user.update_username', 'uses' => 'UsersController@updateUsername'));
  Route::post('users/updateSelect',array('as' => 'user.update_select', 'uses' => 'UsersController@updateSelect'));
  
  Route::post('users/all',array('as' => 'user.all', 'uses' => 'UsersController@all'));

  Route::resource('perms', 'PermsController');
  
  /*
Verb 		Path 				Action 		Route Name
GET 		/resource 			index 		resource.index
GET 		/resource/create 	create 		resource.create
POST 		/resource 			store 		resource.store
GET 		/resource/{id} 		show 		resource.show
GET 		/resource/{id}/edit edit 		resource.edit
PUT/PATCH 	/resource/{id} 		update 		resource.update
DELETE 		/resource/{id} 		destroy 	resource.destroy
*/

 });

Route::resource('tweets', 'TweetsController');

Route::resource('pencils', 'PencilsController');

Route::resource('calendars', 'CalendarsController');

Route::resource('calendars', 'CalendarsController');

Route::resource('calendars', 'CalendarsController');

Route::resource('calendars', 'CalendarsController');

Route::resource('identicas', 'IdenticasController');

Route::resource('identicas', 'IdenticasController');

Route::resource('blogs', 'BlogsController');

Route::resource('blogs', 'BlogsController');

Route::resource('news', 'NewsController');

Route::resource('news', 'NewsController');

Route::resource('pencils', 'PencilsController');

Route::resource('pencils', 'PencilsController');

Route::resource('pencils', 'PencilsController');

Route::resource('pencils', 'PencilsController');

Route::resource('pencils', 'PencilsController');

Route::resource('pages', 'PagesController');

Route::resource('pages', 'PagesController');

Route::resource('pages', 'PagesController');

Route::resource('pages', 'PagesController');

Route::resource('pages', 'PagesController');

Route::resource('pages', 'PagesController');

Route::resource('cds', 'CdsController');

Route::resource('cds', 'CdsController');

Route::resource('dvds', 'DvdsController');

Route::resource('dvds', 'DvdsController');

Route::resource('cassetes', 'CassetesController');

Route::resource('cassetes', 'CassetesController');

Route::resource('bolis', 'BolisController');

Route::resource('bolis', 'BolisController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('boligrafs', 'BoligrafsController');

Route::resource('ircs', 'IrcsController');

Route::resource('ircs', 'IrcsController');

Route::resource('drives', 'DrivesController');

Route::resource('drives', 'DrivesController');

Route::resource('drives', 'DrivesController');

Route::resource('cpus', 'CpusController');

Route::resource('cpus', 'CpusController');

Route::resource('cpus', 'CpusController');

Route::resource('micros', 'MicrosController');

Route::resource('pcs', 'PcsController');

Route::resource('pcs', 'PcsController');

Route::resource('plays', 'PlaysController');

Route::resource('plays', 'PlaysController');

Route::resource('sonis', 'SonisController');

Route::resource('sonis', 'SonisController');

Route::resource('games', 'GamesController');

Route::resource('games', 'GamesController');

Route::resource('games', 'GamesController');

Route::resource('games', 'GamesController');

Route::resource('games', 'GamesController');

Route::resource('games', 'GamesController');

Route::resource('nintendos', 'NintendosController');

Route::resource('nintendos', 'NintendosController');

Route::resource('gameboys', 'GameboysController');

Route::resource('gameboys', 'GameboysController');

Route::resource('bolis', 'BolisController');

Route::resource('s', 'DiaController');

Route::resource('dia', 'DiaController');

Route::resource('letras', 'LetrasController');

Route::resource('letras', 'LetrasController');

Route::resource('musicas', 'MusicasController');

Route::resource('musicas', 'MusicasController');

Route::resource('djs', 'DjsController');

Route::resource('djs', 'DjsController');

Route::resource('djautos', 'DjautosController');

Route::resource('djautos', 'DjautosController');

Route::resource('djautomatiks', 'DjautomatiksController');

Route::resource('djautomatiks', 'DjautomatiksController');

Route::resource('djautomatiks', 'DjautomatiksController');

Route::resource('djautomatiks', 'DjautomatiksController');

Route::resource('djautomatiks', 'DjautomatiksController');

Route::resource('autos', 'AutosController');

Route::resource('autos', 'AutosController');

Route::resource('automas', 'AutomasController');

Route::resource('automas', 'AutomasController');

Route::resource('s', 'AutomataController');

Route::resource('s', 'AutomataController');

Route::resource('automata', 'AutomataController');

Route::resource('auts', 'AutsController');

Route::resource('aus', 'AusController');

Route::resource('aurs', 'AursController');

Route::resource('aurs', 'AursController');

Route::resource('aurkezpenas', 'AurkezpenasController');

Route::resource('aurkezpenas', 'AurkezpenasController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpes', 'AurkezpesController');

Route::resource('aurkezpes', 'AurkezpesController');

Route::resource('aurkezps', 'AurkezpsController');

Route::resource('aurkezps', 'AurkezpsController');

Route::resource('aurkezs', 'AurkezsController');

Route::resource('aurkezs', 'AurkezsController');

Route::resource('aurkes', 'AurkesController');

Route::resource('aurkes', 'AurkesController');

Route::resource('aurkes', 'AurkesController');

Route::resource('aurks', 'AurksController');

Route::resource('aurks', 'AurksController');

Route::resource('aurs', 'AursController');

Route::resource('aurs', 'AursController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpens', 'AurkezpensController');

Route::resource('aurkezpes', 'AurkezpesController');

Route::resource('aurkezpes', 'AurkezpesController');

Route::resource('aurkezps', 'AurkezpsController');

Route::resource('aurkezps', 'AurkezpsController');

Route::resource('aurkezs', 'AurkezsController');

Route::resource('aurkezs', 'AurkezsController');

Route::resource('aurkes', 'AurkesController');

Route::resource('aurkes', 'AurkesController');

Route::resource('aurks', 'AurksController');

Route::resource('aurks', 'AurksController');