<?php

Route::get('login',array('as' => 'user.login', 'uses' => 'UsersController@get_login'));
Route::post('login',array('as' => 'user.post_logint', 'uses' => 'UsersController@post_login'));

Route::group(array('before' => 'auth'), function(){
  /* Users */
  Route::when('users', 'only_admin');
  Route::when('users/*', 'only_admin');
  Route::resource('users', 'UsersController');
  Route::get('logout',array('as' => 'user.logout', 'uses' => 'UsersController@get_logout', 'before' => 'only_admin'));

  Route::post('users/updateUsername',array('as' => 'user.update_username', 'uses' => 'UsersController@updateUsername'));
  Route::post('users/updateSelect',array('as' => 'user.update_select', 'uses' => 'UsersController@updateSelect'));
  
  Route::post('users/all',array('as' => 'user.all', 'uses' => 'UsersController@all'));

  /* Perms */
  Route::when('perms', 'only_admin');
  Route::when('perms/*', 'only_admin');
  Route::resource('perms', 'PermsController');
  Route::post('perms/setPostPermissions',array('as' => 'perm.setPostPermissions', 'uses' => 'PermsController@setPostPermissions'));

  
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

  /* Groups */
  Route::when('groups', 'only_admin');
  Route::when('groups/*', 'only_admin');
  Route::resource('groups', 'GroupsController');
  Route::get('set_permissions',array('as' => 'admin.set_permissions', 'uses' => 'PermsController@get_set_permissions', 'before' => 'auth'));

  Route::resource('projects', 'ProjectsController');
 });

Route::resource('tweets', 'TweetsController');

Route::get('panel', function()
{
    return 'Hello World';
});
