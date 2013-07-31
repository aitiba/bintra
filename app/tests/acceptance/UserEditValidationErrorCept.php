<?php
$I = new WebGuy($scenario);
$I->wantTo('edit user 1 with validation errors');
$I->amOnPage('/users/1/edit');
//$I->fillField('group_id', 1);
$I->fillField('#name','uno');
$I->fillField('#email','uno@uno.com');
$I->fillField('#password','password');
$I->fillField('#username','uno');
$I->click('users.Send!');
$I->seeCurrentUrlEquals('/users/edit/1');