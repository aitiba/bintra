<?php
use aitiba\UserAuth\UserAuthRepository as UserAuth;
use aitiba\User\UserRepository as User;
class UsersController extends BaseController {
    /**
     * The UserAuth instance.
     *
     * @var \aitiba\UserAuth\UserAuthRepository
     */
    private $userauth;

    /**
     * The User instance.
     *
     * @var \aitiba\User\UserRepository
     */
    private $user;

    /**
     * Create a new User.
     *
     * @param  \aitiba\UserAuth\UserAuthRepository  $userauth
     * @param  \aitiba\User\UserRepository  $user
     * @return void
     */
    public function __construct(UserAuth $userauth, User $user)
    {
      $this->userauth = $userauth;
      $this->user = $user;
    }

    /**
     * User login screen.
     *
     * @return \Illuminate\View\View
     */
    public function get_login()
    {
        return View::make('login');
    }

    /**
     * Get login credencials for newly login user.
     *
     * @return \Illuminate\Support\Facades\Redirect
     */
    public function post_login() {
        $credentials = array('username' => Input::get('username'),  'password' => Input::get('password'));
    
        if ($this->userauth->attempt($credentials))
        {
           return Redirect::route('users.index')
            ->with("flash_message", Lang::get('messages.User succesfully logged!'));
        }
        else
        {
          return Redirect::route('user.login')
            ->with("flash_message", Lang::get('messages.User or password incorred!'));
        }
    }

    public function get_logout(){
        Auth::logout();
        return Redirect::route('user.login')
            ->with("flash_message", Lang::get('messages.User succesfully logout!'));
    
    }
    /**
     * Display a list of users.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->findAll();
        return View::make('users.index')->with('users', $users);
      
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::except('_token');
        $v = $this->user->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('users.create')->withErrors($v)->withInput();
        }
        
        if ( $this->user->store($data) )
        {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.User succesfully created!'));
        }
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        return View::make('users.edit')->with('user', $user);
    }

    /**
     * Update user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //dd(Input::all());
        $data = Input::except('_token');
        $data['id'] = $id;
        $v = $this->user->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('users.edit', $id)->withErrors($v)->withInput();
        }
        
        if ( $this->user->edit_store($data) )
        {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.User succesfully edited!'));
        }
        return false;

    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //dd("hola");
        if($this->user->destroy($id))
        {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.User succesfully deleted!'));
        } else {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.has problems to delete!'));
        }
    }

}