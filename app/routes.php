<?php

Route::get('login',array('as' => 'login_user', 'uses' => 'UsersController@get_login'));
Route::post('login',array('as' => 'login_user_post', 'uses' => 'UsersController@post_login'));

//Route::group(array('before' => 'auth'), function(){

  Route::resource('users', 'UsersController');

 //});