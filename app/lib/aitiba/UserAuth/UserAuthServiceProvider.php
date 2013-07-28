<?php namespace aitiba\UserAuth;
use Illuminate\Support\ServiceProvider;
 
class UserAuthServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'aitiba\UserAuth\UserAuthRepository',
      'aitiba\UserAuth\EloquentUserAuthRepository'
    );
  }
 
}