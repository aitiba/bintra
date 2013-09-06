<?php namespace aitiba\Group;
use Illuminate\Support\ServiceProvider;
 
class GroupServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'aitiba\Group\GroupRepository',
      'aitiba\Group\GroupRepositoryImplements'
    );
  } 
}