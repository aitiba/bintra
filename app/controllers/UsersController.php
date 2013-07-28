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
    // si metio bien los datos de acceso
        if ($this->userauth->login($credentials))
        {
           return Redirect::route('index_message')->with("flash_message", Lang::get('messages.User succesfully logged!'));
        }
        //metio mal los datos de acceso
        else
        {
          return Redirect::route('login_user')->with("flash_message", Lang::get('messages.User or password incorred!'));
        }
    }
    /**
     * Display a list of users.
     *
     * @return Response
     */
    public function index()
    {
        var_dump(Hash::make('prueba'));
      
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
            return Redirect::to('users/create')->withErrors($v)->withInput();
        }
        
        if ( $this->user->store($data) )
        {
            return Redirect::to('users')->with("flash_message", Lang::get('user.User succesfully created!'));
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
        //
    }

    /**
     * Update user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}