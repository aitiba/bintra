<?php

Route::get('login',array('as' => 'login_user', 'uses' => 'UsersController@get_login'));
Route::post('login',array('as' => 'login_user_post', 'uses' => 'UsersController@post_login'));

//Route::group(array('before' => 'auth'), function(){

  Route::resource('users', 'UsersController');

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

 //});