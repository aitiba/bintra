<?php namespace aitiba\User;
use Illuminate\Support\ServiceProvider;
 
class UserServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'aitiba\User\UserRepository',
      'aitiba\User\EloquentUserRepository'
    );
  }
 
}