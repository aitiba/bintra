<?php
use aitiba\Project\ProjectRepository as Project;
class ProjectsController extends BaseController {
	/**
     * The project instance.
     *
     * @var $project string
     */
    private $project;

    /**
     * Create a new Project.
     *
     * @param  $project $project
     * @return void
     */
    public function __construct(Project $project)
    {
      $this->project = $project;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//si es admin
		if(Auth::user()->group->name == 'admin')
		{
			$projects = $this->project->findAll();
		// cualquier otro ve los poryectos se los que esta asignado.
		} else {
			$projects = Auth::user()->projects;
		}
		
		return View::make('projects.index')->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
        
        $v = $this->project->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('projects.create')->withErrors($v)->withInput();
        }
        
        if ( $this->project->store($data) )
        {
            return Redirect::route('projects.index')->with("flash_message", Lang::get('Projects succesfully created!'));
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = $this->project->findOrFail($id);
        return View::make('projects.show')->with('project', $project);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = $this->project->find($id);
        if (!$project) {
            return Redirect::route('projects.index');
        }
        return View::make('projects.edit')->with('project', $project);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
        $data['id'] = $id;
        $v = $this->project->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('projects.edit', $id)->withErrors($v)->withInput();
        }
        unset($data['actionType']);
        if ( $this->project->update($data) )
        {
            return Redirect::route('projects.index')->with("flash_message", Lang::get('Projects succesfully edited!'));
        }
        return false;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if($this->project->destroy($id))
        {
            return Redirect::route('projects.index')->with("flash_message", Lang::get('Projects succesfully deleted!'));
        } else {
            return Redirect::route('projects.index')->with("flash_message", Lang::get('Projects problems to delete!'));
        }
	}
}