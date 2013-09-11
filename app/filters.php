<?php
use Illuminate\Support\Pluralizer;
/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	echo 'USURIO CONECTADO: '.Auth::user()->name.'<br/>';
//dd($_SERVER['REQUEST_METHOD']);
	if (Auth::guest()) return Redirect::to('login');
	  //conseguir el resource y ruta que esta intentando acceder el usuario logueado
	  $adminResource = array('users', 'perms', 'groups');
	  $resource = Request::segment(1);
	  if(!in_array($resource, $adminResource)) {
	    $projectTryToView = ucwords(Pluralizer::singular(Request::segment(1)));
	 
	    //projects
	    /*if (!Request::segment(2)) {
		  $action = 'index'; 
	    // projects/19 or projects/create
	    } else*/
	    if (!Request::segment(3)) {
	      if (Input::get('_method') == 'DELETE') {
	    	//$action = 'delete';
	    	//si tiene permisos sobre ese proyecto
	  		$projectWithPerms = projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}
	  		//si NO tiene permisos sobre la accion, return Redirect::to('users.index'); 
	      }elseif ((int)Request::segment(2)){
	  		//$action = 'view';
	  		//si tiene permisos sobre ese proyecto
	  		$projectWithPerms = projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}

	  	  }
	  	  /*elseif (is_string(Request::segment(2))){
	  		$action = 'create';
	  	  }*/
	  	  // projects/19/edit
	    } elseif (Request::segment(3)) {
	  		//$action = 'edit';
	  		//si tiene permisos sobre ese proyecto
	  		$projectWithPerms = projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}
	    } 
	  //mirar si el usuario conectado, esta asignado al proyecto de la ruta
	 
	  // $action es igual index pasa auto y se encarga el metodo del controlador de ello
	  /*echo 'Recurso que se quiere acceder: '.$resource.'<br/>';
	  echo 'Acción que se quiere acceder: '.$action.'<br/>';
	  echo 'Proyecto que se trata de ver:'.$projectTryToView.'<br/>';*/

//return true;
	  //dd('fin');
		//si tiene permisos, mirar si tiene permisos sobre esa accion

			

		//si no tiene permisos, Redirect::to('users.index'); 
	 }
});

function projectWithPerm($projectTryToView)
{
	$projectTryToView = $projectTryToView::find((int)Request::segment(2))->name;
	//	dd($projectTryToView);
	$projects = Auth::user()->projects->all();

	foreach ($projects as $project) {
		echo ('nonblre del proyecto donde tiene persmisos: '.$project->name).'<br>';
		$projectWithPerms[] = $project->name;
	}

	if(!in_array($projectTryToView, $projectWithPerms)){
		//dd("fuera");
		return false;
	}
	return $projectWithPerms;
}

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

Route::filter('only_admin', 'OnlyAdmin');