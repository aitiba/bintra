<?php
use Illuminate\Support\Pluralizer;
class ProjectWithPerm
{
  public function filter()
  {  
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
	  		$projectWithPerms = $this->projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}
	      }elseif ((int)Request::segment(2)){
	  		//$action = 'view';
	  		echo "pasa";
	  		$projectWithPerms = $this->projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}
	  		dd($projectTryToView);

	  	  }
	  	  /*elseif (is_string(Request::segment(2))){
	  		$action = 'create';
	  	  }*/
	  	  // projects/19/edit
	    } elseif (Request::segment(3)) {
	  		//$action = 'edit';
	  		/*$projectWithPerms = $this->projectWithPerm($projectTryToView);
	  		if($projectWithPerms == null){
	  			return Redirect::route('projects.index');
	  		}*/
	    } 
	  //mirar si el usuario conectado, esta asignado al proyecto de la ruta
	 
	  // $action es igual index pasa auto y se encarga el metodo del controlador de ello
	  /*echo 'Recurso que se quiere acceder: '.$resource.'<br/>';
	  echo 'Acción que se quiere acceder: '.$action.'<br/>';
	  echo 'Proyecto que se trata de ver:'.$projectTryToView.'<br/>';*/

//return true;
	  //dd('fin');
		//si tiene permisos, mirar si tiene permisos sobre esa accion

			//si NO tiene, return Redirect::to('users.index'); 

		//si no tiene permisos, Redirect::to('users.index'); 
	 }

}
  function projectWithPerm($projectTryToView)
{
	dd($projectTryToView);
	echo "asa";
	/*$projectTryToView = $projectTryToView::find((int)Request::segment(2))->name;
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
	return $projectWithPerms;*/
}

}