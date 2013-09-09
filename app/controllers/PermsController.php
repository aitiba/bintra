<?php
use aitiba\Perm\PermRepository as Perm;
use aitiba\Group\GroupRepository as Group;
class PermsController extends BaseController {
	/**
     * The Perm instance.
     *
     * @var \aitiba\Perm\Perm
     */
    private $perm;

    /**
     * Create a new User.
     *
     * @param  \aitiba\Group\Group  $group
     * @param  \aitiba\Perm\Perm  $perm
     * @return void
     */
    public function __construct(Group $group, Perm $perm)
    {
      $this->group = $group;
      $this->perm = $perm;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$perms = $this->perm->findAll();
        return View::make('perms.index')->with('perms', $perms);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('perms.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
        
        $v = $this->perm->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('perms.create')->withErrors($v)->withInput();
        }
        
        if ( $this->perm->store($data) )
        {
            return Redirect::route('perms.index')->with("flash_message", Lang::get('Permsuccesfully created!'));
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
		$perm = $this->perm->findOrFail($id);
        return View::make('perms.show')->with('perm', $perm);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$perm = $this->perm->find($id);
        if (!$perm) {
            return Redirect::route('perms.index');
        }
        return View::make('perms.edit')->with('perm', $perm);
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
        $v = $this->perm->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('perms.edit', $id)->withErrors($v)->withInput();
        }
        
        if ( $this->perm->update($data) )
        {
            return Redirect::route('perms.index')->with("flash_message", Lang::get('Perms succesfully edited!'));
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
		if($this->perm->destroy($id))
        {
            return Redirect::route('perms.index')->with("flash_message", Lang::get('Perms succesfully deleted!'));
        } else {
            return Redirect::route('perms.index')->with("flash_message", Lang::get('Perms problems to delete!'));
        }
	}

	public function get_set_permissions()
	{
		$groups = $this->group->findAll();
		$perms = $this->perm->findAll();

		return View::make('perms.setPermissions')->with('groups', $groups)->with('perms', $perms);
		dd($groups);
	}

	public function setPostPermissions() {
		if($_POST['value'] === "on") {
			echo "on";
		} else {
			echo "off";
		}
		/*dd($_POST['value']);
		dd($_POST['group']);
		dd($_POST['perm']);*/
		//dd($_POST['value']);
		if($_POST['value'] == 1)
		{
			// mirar si esta ese group por perm.
			//si esta borrarlo
			$groups = \Perm::find($_POST['perm'])->groups;
			foreach ($groups as $group) {
				//dd($group->pivot->group_id);
				//dd($group->pivot->perm_id);
				$res = \Perm::find($_POST['perm'])->groups()->having('pivot_group_id','=', $_POST['group']);
			//	dd(\Perm::find(3)->groups()->having('pivot_group_id','=', 2)->first());
				 if($res->first()){
				 	// Borrar ese elemento. Find por dos ids?
				 	$res->detach();
				 	echo "delete";
				 } 
			}
		} elseif($_POST['value'] == 0) {
			// mira esta ese group por perm.
			//echo "on2";
			// si NO esta, añadirlo.
			$exist =  \Perm::find($_POST['perm'])->groups()->find($_POST['group']);
			//var_dump($groups);
			if (!$exist)
			{
				// Attach relaciona dos modelo existe many to many
				\Perm::find($_POST['perm'])->groups()->attach(\Group::find($_POST['group']));
				echo "new";
			}
		}
	}			
}