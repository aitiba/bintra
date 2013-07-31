<?php namespace aitiba\UserAuth;
interface UserAuthRepository 
{
	public function attempt($credentials);

	public function logout();
}