<?php namespace aitiba\User;
interface UserRepository 
{
     public function rules($field);

     public function create();

	/**
     * Validation for data.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
	public function validation($data);

     /**
     * Find all users on storage.
     */
     public function findAll();

     /**
     * Find a user on storage.
     *
     * @param  integer  $id
     */
     public function find($id);

     /**
     * Find a user on storage or fails.
     *
     * @param  integer  $id
     */
     public function findOrFail($id);
     
     /**
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
     public function store($data);

     /**
     * Update storage.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
     public function update($data);

     /**
     * Find a group by their name.
     * @param String $name
     * @return Group
     */
     public function wherename($name);

     /**
     * Destroy data on storage.
     *
     * @param  integer  $id
     */
     public function destroy($id);

}