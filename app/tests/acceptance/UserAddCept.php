<?php
if (App::environment() == 'testing')
{
	Artisan::call('migrate');
	App::make('DatabaseSeeder')->run();
}
//echo App::environment();

$I = new WebGuy($scenario);
$I->wantTo('add a user to storage');
$I->amOnPage('/users/create');
//$I->fillField('group_id', 1);
$I->fillField('#name','a');
$I->fillField('#email','paaaaaco@paco.com');
$I->fillField('#password','password');
$I->fillField('#username','pacaaaaa');
$I->click('users.Send!');
$I->seeCurrentUrlEquals('/users');