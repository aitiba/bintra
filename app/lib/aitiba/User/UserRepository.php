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
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Redirect  $data
     */
	public function store($data);

}