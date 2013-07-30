<?php
$I = new WebGuy($scenario);
$I->wantTo('try to create user and fails');
$I->amOnPage('/users/create');
//$I->fillField('group_id', 1);
$I->fillField('#name','prueba');
$I->fillField('#email','prueba@prueba.com');
$I->fillField('#password','password');
$I->fillField('#username','prueba');
$I->click('users.Send!');
$I->seeCurrentUrlEquals('/users/create');