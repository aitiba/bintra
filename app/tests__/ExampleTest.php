<?php namespace app\tests;

use Hash;
use Lang;
class ExampleTest extends TestCase
 {
 	public function tearDown()
	{
		parent::tearDown();
		\Mockery::close();
	}

	public function setUp()
	{
	  parent::setUp();
	 
	  $this->mockUserAuth = $this->mock('aitiba\UserAuth\UserAuthRepository');
	  $this->mockUser = $this->mock('aitiba\User\UserRepository');
	  $this->mockView = $this->mock('Illuminate\View\View');
	}
	
	/**
	 * User storage goes well.
	 *
	 * @param \Mockery\MockInterface
	 * @return \Mockery\MockInterface
	 */   
	public function mock($class)
	{
	  $mock = \Mockery::mock($class);
	  
	  $this->app->instance($class, $mock);
	  
	  return $mock;
	}

	/**
	 * User storage goes well.
	 *
	 * @return void
	 */ 
	public function testUserStorageOk()
	{
	  //ataca a la base de datos! :-(
	  //$response = $this->action('POST', 'UsersController@store', $data);
	 
	  $this->mockUser->shouldReceive('validation')->once()->andReturn(true);

	  $this->mockUser->shouldReceive('store')->once()->andReturn(\Mockery::mock('Illuminate\Http\RedirectResponse'));

	 

	  $this->call('POST', 'users');

	  $this->assertRedirectedTo('users');
	  
	}

	/**
	 * User storage goes bad.
	 *
	 * @return void
	 */ 
	public function testUserStorageFails()
	{
	
	 $this->mockUser->shouldReceive('validation')->once()->andReturn(\Mockery::mock('Illuminate\Http\rectResponse'));

	 $this->mockUser->shouldReceive('store')->andReturn(false);
	 
	 $this->call('POST', 'users');

	 $this->assertRedirectedTo('users/create');

	}

	/**
	 * User show view on edit user.
	 *
	 * @return void
	 */ 
	public function testUserOnEdit()
	{

		 $mockUser = $this->mockUser->shouldReceive('find')
		->andReturn(true);
		// le esta diciendo a laravel, que remplace el UserRepository por tu Mock
		//\App::instance('UserRepository', $mockUser);
		$response = $this->call('GET', 'users/17/edit');
		$this->assertTrue($response->isOK());
		//var_dump($user);
		//$this->assertEquals($this->mockUser->name, $response->getContent());
	 	$mockView = $this->mockView->shouldReceive('make')->andReturn(\Mockery::mock('Illuminate\View\View'));
	 
	 	//$response = new RedirectResponse('foo.bar');
       // $response->setRequest(Request::create('users/17/edit', 'GET'));
        
	 	//$this->call('GET', 'users/17/edit');

	 	// Return something, an object on this case.
	 	//$this->assertTrue( is_object($mockUser) );

	 	//$this->assertTrue( is_object($mockView) );

		/*
		// comprueba que devuelve lo que deberia de la base de datos. MIERDA para lo que buscamos
		$conn = \Mockery::mock('Illuminate\Database\Connection');
		$conn->shouldReceive('table')->once()->with('foo')->andReturn($conn);
		$conn->shouldReceive('find')->once()->with(17)->andReturn(array('id' => 17, 'name' => 'prueba'));

		$hasher = \Mockery::mock('Illuminate\Hashing\HasherInterface');
		$provider = new Illuminate\Auth\DatabaseUserProvider($conn, $hasher, 'foo');
		$user = $provider->retrieveByID(17);

		$this->assertEquals(17, $user->getAuthIdentifier());

		// comprueba en una vista se pueden meter las variables sin problemas
		$view = new View(\Mockery::mock('Illuminate\View\Environment'), \Mockery::mock('Illuminate\View\Engines\EngineInterface'), 'view', 'path', array());
		var_dump($view->getData());
		$view->name = 'prueba';
		//$view->foo[] = 'bar';
		//$view['baz'] = array();
		//$view['baz'][] = 'boom';
		$this->assertEquals(array('name' => 'prueba'), $view->getData());
		//$this->assertEquals('<input type="text" id="username" value="prueba" name="username" required="required">', $response->getContent());
*/
		//$crawler = $this->client->request('GET', 'users/17/edit')->with();

     //$mock = $this->getMock('Foo', array('bar'));
            /*    $this->mockUser->expects($this->once())
                     ->method('bar')
                     ->with()    // does nothing, but it doesn't matter
                     ->will($this->returnArgument(0));
                self::assertEquals('foobar', $mock->bar());  // PHP inserts 1 and 2
                // assertion fails because 1 != 'foobar'*/

//$this->assertTrue($this->client->getResponse()->isOk());

//$this->assertCount(1, $crawler->filter('input#username:contains("prueba")'));

		//$response = $this->action('GET', 'UsersController@edit', 17);

		//$view = $response->original;

		//$this->assertEquals('prueba', $res);
	}
}
