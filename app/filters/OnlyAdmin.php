<?php
class OnlyAdmin
{
  public function filter()
  {
  	if (Auth::user()->group->name != 'admin') return Redirect::route('projects.index');
  } 
}
