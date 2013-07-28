<?php namespace aitiba\UserAuth;
class EloquentUserAuthRepository implements UserAuthRepository 
{
	// TODO: Use __toString instead of (string)
	/*public function __toString()
	{
		echo "string";
	  //  return $this->name;
	}*/

	public function login($credentials) 
	{
		//echo "login";
		//return "login";
		//$user = array($credentials);
		return \Auth::attempt($credentials);
	}

	public function logout() 
	{
		return "logout";
	}

	
}