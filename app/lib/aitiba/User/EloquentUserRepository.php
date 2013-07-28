<?php namespace aitiba\User;
use User;
use Hash;
use Input;
use Redirect;
use Lang;
use Validator;
class EloquentUserRepository implements UserRepository 
{
	/**
     * Validation.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function validation($data) {
		$v = Validator::make($data, User::$rules);
		if($v->fails())
		{
			return $v;
		}
		return true;
	}	

	/**
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function store($data) {
		$data['password'] = Hash::make(Input::get('password'));

		if ( User::create($data)) {
			return Redirect::to('users')
				->with("flash_message", Lang::get('user.User succesfully created!'));
		}
		return false;
	}
}