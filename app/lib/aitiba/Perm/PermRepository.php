<?php namespace aitiba\Perm;
interface PermRepository 
{
	/**
     * Find all on storage.
     *
     */
     public function findAll(); 

    /**
     * Find perm on storage.
     *
     * @param  integer  $id
     * @return Perm
     */
	public function find($id);

	/**
     * Find a perm on storage or fails.
     *
     * @param  integer  $id
     * @return Perm
     */
	public function findOrFail($id);

     /**
     * Validation.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function validation($data);

	/**
     * Store data on storage.
     *
     * @param  \Illuminate\Support\Facades\Input  $data
     * @return On fails \Illuminate\Support\Facades\Redirect
     * @return On ok bool
     */
	public function store($data); 

	/**
     * Destroy data on storage.
     *
     * @param  integer  $id
     */
	public function destroy($id);
}