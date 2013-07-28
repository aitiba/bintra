<?php

class User extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'group_id' => 'required',
		'name' => 'required|alpha_num',
		'email' => 'required|email|unique:users,email',
		//'password' => array('required', 'regex:((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!_$%]).{8,20})'),
		'username' => 'required|alpha_num|unique:users,username',       
    );
}