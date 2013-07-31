<?php
$I = new WebGuy($scenario);
$I->wantTo('edit user 1');
$I->amOnPage('/users/1/edit');
//$I->fillField('group_id', 1);
$I->fillField('#name','juana');
$I->fillField('#email','juana@uno.com');
$I->fillField('#password','juana');
$I->fillField('#username','juana');
$I->click('users.Send!');
$I->seeCurrentUrlEquals('/users');