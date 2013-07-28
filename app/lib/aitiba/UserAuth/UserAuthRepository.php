<?php namespace aitiba\UserAuth;
interface UserAuthRepository 
{
	public function login($credentials);

	public function logout();
}