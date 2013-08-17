<?php 

class Group extends Eloquent
{
	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'groups';

    protected $guarded = array();

    public static $rules = array(
    	'group_id' => 'required',
		'name' => 'required|alpha_num',
		'email' => 'required|email|unique:users,email',
		'password' => array('required', 'regex:((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!_$%]).{8,20})', 'confirmed'),
		'password_confirmation' => array('required', 'regex:((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!_$%]).{8,20})'),
		'username' => 'required|alpha_num|unique:users,username',       
    );
}