<?php namespace aitiba\Project;
use Illuminate\Support\ServiceProvider;
 
class ProjectServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'aitiba\Project\ProjectRepository',
      'aitiba\Project\ProjectRepositoryImplements'
    );
  } 
}