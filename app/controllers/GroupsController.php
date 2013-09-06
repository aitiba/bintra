<?php
use aitiba\Group\GroupRepository as Group;
class GroupsController extends BaseController {
	/**
     * The group instance.
     *
     * @var $group string
     */
    private $group;

    /**
     * Create a new Group.
     *
     * @param  $group $group
     * @return void
     */
    public function __construct(Group $group)
    {
      $this->group = $group;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groups = $this->group->findAll();
        return View::make('groups.index')->with('groups', $groups);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('groups.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
        
        $v = $this->group->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('groups.create')->withErrors($v)->withInput();
        }
        
        if ( $this->group->store($data) )
        {
            return Redirect::route('groups.index')->with("flash_message", Lang::get('Groups succesfully created!'));
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
		$group = $this->group->findOrFail($id);
        return View::make('groups.show')->with('group', $group);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$group = $this->group->find($id);
        if (!$group) {
            return Redirect::route('groups.index');
        }
        return View::make('groups.edit')->with('group', $group);
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
        $v = $this->group->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('groups.edit', $id)->withErrors($v)->withInput();
        }
        unset($data['actionType']);
        if ( $this->group->update($data) )
        {
            return Redirect::route('groups.index')->with("flash_message", Lang::get('Groups succesfully edited!'));
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
		if($this->group->destroy($id))
        {
            return Redirect::route('groups.index')->with("flash_message", Lang::get('Groups succesfully deleted!'));
        } else {
            return Redirect::route('groups.index')->with("flash_message", Lang::get('Groups problems to delete!'));
        }
	}
}