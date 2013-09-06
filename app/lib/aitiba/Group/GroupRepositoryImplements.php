<?php namespace aitiba\Group;
use Group;
use Hash;
use Input;
use Redirect;
use Lang;
use Validator;
class GroupRepositoryImplements implements GroupRepository 
{

	public function rules($field)
	{
		return Group::$rules[$field];
	}

	public function create()
	{
		$input = $data = Input::except('password_confirmation');
		return Group::create($input);
		//dd(MyValidator::$rules);
		//dd(MyValidator::passes());
	}
	/**
     * Validation.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function validation($data) 
	{
		/*if (Input::get('_method') == 'PUT' )
		{
			$user = Group::find($data['id']);
			$this->emailHasChange($user, $data);
			$this->userNameHasChange($user, $data);
			// if is on edit and password is not set, 
			// unset pasword validation
			if (!Input::has('password')) 
			{
				unset(Group::$rules['password']);
				unset(Group::$rules['password_confirmation']);
			}
		}*/
		

		$v = Validator::make($data, Group::$rules);
		if($v->fails())
		{
			return $v;
		}
		return true;
	}	

	/**
     * Has email field change?
     *
     * @param  Group  $user
     * @param  Input data  $data
     * @return none
     */
	private function emailHasChange($user, $data)
	{
		if ($user['email'] == $data['email'])
		{
			unset(Group::$rules['email']);
		}
	}

	/**
     * Has username field change?
     *
     * @param  Group  $user
     * @param  Input data  $data
     * @return none
     */
	private function userNameHasChange($user, $data)
	{
		if ($user['username'] == $data['username']) 
		{
			unset(Group::$rules['username']);
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
		if ( Group::create($data)) 
		{
			return Redirect::route('groups.index')
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
	public function update($data) 
	{
		$user = Group::find($data['id']);
		//unset($user['password_confirmation']);
	
	//	$user = $this->setData($user, $data);
		
		//return ;
        if ($user->update($data)) 
        {
			return Redirect::route('groups.index')
				->with("flash_message", Lang::get('user.User succesfully edited!'));
        }
		return false;
	}

	/**
     * Set data from input to original
     *
     * @param  Original usr data from database  $original
     * @param Data from input $input
     * @return User
     */
	private function setData($original, $input)
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
     * Find a Group on storage.
     *
     * @param  integer  $id
     * @return Group
     */
	public function find($id) 
	{
		if (Group::find($id)) 
		{
			return Group::find($id);
		}
		return false;
	}

	/**
     * Find a Group on storage or fails.
     *
     * @param  integer  $id
     * @return Group
     */
	public function findOrFail($id) 
	{
		if (Group::findOrFail($id)) 
		{
			return Group::findOrFail($id);
		}
		return false;
	}

	/**
     * Find all groups.
     * @return array()
     */
	public function findAll() 
	{
		return Group::all();
	}

	/**
     * Find a group by their name.
     * @param String $name
     * @return Group
     */
	public function wherename($name)
	{
		return Group::wherename($name);
	}

	/**
     * Destroy data on storage.
     *
     * @param  integer  $id
     */
	public function destroy($id) {
		$user = Group::find($id);

		 return $user->delete();
	}
}