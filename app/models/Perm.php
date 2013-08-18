<?php

class Perm extends Eloquent {
	protected $guarded = array();

    public static $rules = array(
		'name' => 'required',
		'module' => 'required|alpha_num',   
    );
}