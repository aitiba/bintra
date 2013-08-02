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
	public function validation($data) 
	{
		$user = User::find($data['id']);
		$this->emailHasChange($user, $data);
		$this->userNameHasChange($user, $data);

		
		// if is on edit and password is not set, 
		// unset pasword validatioin
		if (Input::get('_method') == 'PUT' || !Input::has('password'))
		{
			unset(User::$rules['password']);
		}

		$v = Validator::make($data, User::$rules);
		if($v->fails())
		{
			return $v;
		}
		return true;
	}	

	/**
     * Has email field change?
     *
     * @param  User  $user
     * @param  Input data  $data
     * @return none
     */
	private function emailHasChange($user, $data)
	{
		if ($user['email'] == $data['email'])
		{
			unset(User::$rules['email']);
		}
	}

	/**
     * Has username field change?
     *
     * @param  User  $user
     * @param  Input data  $data
     * @return none
     */
	private function userNameHasChange($user, $data)
	{
		if ($user['username'] == $data['username']) 
		{
			unset(User::$rules['username']);
		}
	}
		

	/**
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function store($data) 
	{
		$data['password'] = Hash::make(Input::get('password'));

		if ( User::create($data)) 
		{
			return Redirect::route('users.index')
				->with("flash_message", Lang::get('user.User succesfully created!'));
		}
		return false;
	}

		/**
     * Store data on edit on storage.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function edit_store($data) 
	{
		$user = User::find($data['id']);
		$user = $this->compareData($user, $data);
		
        if ($user->save()) 
        {
			return Redirect::route('users.index')
				->with("flash_message", Lang::get('user.User succesfully edited!'));
        }
		return false;
	}

	/**
     * Has email field change?
     *
     * @param  Original usr data from database  $original
     * @param Data from input $input
     * @return User
     */
	private function compareData($original, $input)
	{
		if (Input::has('password')) {
            $original->password = Hash::make(Input::get('password'));
        }
        $original->group_id = $input['group_id'];
        $original->name = $input['name'];
        $original->email = $input['email'];
        $original->username = $input['username'];

        return $original;
    }
	/**
     * Find a user on storage.
     *
     * @param  integer  $id
     * @return User
     */
	public function find($id) 
	{
		if (User::find($id)) 
		{
			return User::find($id);
		}
		return false;
	}

	/**
     * Find all users.
     * @return array()
     */
	public function findAll() 
	{
		return User::all();
	}

	public function destroy($id) {
		$user = User::find($id);

		 return $user->delete();
	}

}