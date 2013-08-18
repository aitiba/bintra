<?php namespace aitiba\Perm;
use Illuminate\Support\ServiceProvider;
 
class PermServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'aitiba\Perm\PermRepository',
      'aitiba\Perm\HomePermRepository'
    );
  }
 
}