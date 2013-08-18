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

    public static $rules = array();

    public function perms()
    {
        return $this->belongsToMany('Perm', 'group_perm');
    }
}