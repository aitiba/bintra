<?php namespace aitiba\Perm;
use Perm;
use Validator;
use Redirect;
use Lang;
class HomePermRepository implements PermRepository
{
	/**
     * Find all perms.
     * @return array()
     */
	public function findAll() 
	{
		return Perm::all();
	}

	/**
     * Find perm on storage.
     *
     * @param  integer  $id
     * @return Perm
     */
	public function find($id) 
	{
		if (Perm::find($id)) 
		{
			return Perm::find($id);
		}
		return false;
	}

	/**
     * Find a perm on storage or fails.
     *
     * @param  integer  $id
     * @return Perm
     */
	public function findOrFail($id) 
	{
		if (Perm::findOrFail($id)) 
		{
			return Perm::findOrFail($id);
		}
		return false;
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
		$v = Validator::make($data, Perm::$rules);
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
	public function store($data) 
	{
		if ( Perm::create($data)) 
		{
			return Redirect::route('perms.index')
				->with("flash_message", Lang::get('Perm succesfully created!'));
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
		$perm = Perm::find($data['id']);
		//unset($user['password_confirmation']);
	
		$perm = $this->setData($perm, $data);
		
        if ($perm->save()) 
        {
			return Redirect::route('perms.index')
				->with("flash_message", Lang::get('Perms succesfully edited!'));
        }
		return false;
	}

	/**
     * Set data from input to original
     *
     * @param  Original usr data from database  $original
     * @param Data from input $input
     * @return Perm
     */
	private function setData($original, $input)
	{
        $original->name = $input['name'];
        $original->module = $input['module'];
      
        return $original;
    }

    /**
     * Destroy data on storage.
     *
     * @param  integer  $id
     */
	public function destroy($id) 
	{
		$perm = Perm::find($id);

		 return $perm->delete();
	}
}