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

    public function updateUsername() 
    {
        $id = Input::get('id');
        $value = trim(Input::get('value'));
        $field = Input::get('field');

//dd($value);
        // echo "pasa";
        $v = Validator::make(
            array($field => $value),
            array($field => $this->user->rules($field))
        );
        if ($v->fails())
        {
            if ($field=="name")
            {
                return "ERROR: Solo alphanumericos";
            }
            elseif ($field=="email")
            {
                return "ERROR: Formato email válido:info@burujabetech.net . Emails únicos";
            }
            elseif ($field=="username")
            {
                return "ERROR: Solo alphanumericos.Username únicos.";
            }
        }
        $user = $this->user->find($id);

        $user->$field = $value;
        $user->save();

        return "Saved";
    }

    public function updateSelect()
    {
        $id = Input::get('id');
        $value = trim(Input::get('value'));
        $field = Input::get('field');

//dd($value);
        // echo "pasa";
        $v = Validator::make(
            array($field => $value),
            array($field => $this->user->rules($field))
        );
        if ($v->fails())
        {
          return "ERROR: Intentelo de nuevo.";
        }

        $value = Group::wherename($value)->first();
        $value = $value->id;
        $user = $this->user->find($id);

        $user->$field = $value;
        $user->save();

        return "Saved";
    }

    public function all() 
    {
       // dd("entra");
        // string '{"E":"Letter E","F":"Letter F","G":"Letter G","selected":"F"}' (length=61)
        //$id = Input::get('id');
        dd($this->user->findAll());
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
        $groups = Group::all();
        foreach ($groups as $group) {
            $group_data[$group->name] = $group->name;
        }

        //dd("asd");
        
        return View::make('users.index')->with('users', $users)->with('group_data', $group_data);
      
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
        $data = Input::all();
        /*$s = $this->user->create();

        dd($s->passes());*/

      
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
        $user = $this->user->findOrFail($id);

        return View::make('users.show')->with('user', $user);
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
        if (!$user) {
            return Redirect::route('users.index');
        }
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
        
        if ( $this->user->update($data) )
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
        if($this->user->destroy($id))
        {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.User succesfully deleted!'));
        } else {
            return Redirect::route('users.index')->with("flash_message", Lang::get('user.has problems to delete!'));
        }
    }
}