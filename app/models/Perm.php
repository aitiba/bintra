<?php

class Perm extends Eloquent {
	protected $guarded = array();

    public static $rules = array(
		'name' => 'required',
		'module' => 'required|alpha_num',   
    );

    public function groups()
    {
        return $this->belongsToMany('Group');
    }
}