<?php namespace aitiba\User;
interface UserRepository 
{
	/**
     * Validation for data.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
	public function validation($data);

     /**
     * Find a user on storage.
     *
     * @param  integer  $id
     */
     public function find($id);


     /**
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
     public function store($data);

     /**
     * Store data on edit on storage.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
     public function edit_store($data);
}