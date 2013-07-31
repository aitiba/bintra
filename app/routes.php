<?php

Route::get('login',array('as' => 'user.login', 'uses' => 'UsersController@get_login'));
Route::post('login',array('as' => 'user.post_logint', 'uses' => 'UsersController@post_login'));

Route::group(array('before' => 'auth'), function(){

  Route::resource('users', 'UsersController');
  Route::get('logout',array('as' => 'user.logout', 'uses' => 'UsersController@get_logout'));
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