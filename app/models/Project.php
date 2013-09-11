<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function users()
    {
        return $this->belongsToMany('User');
    }
}