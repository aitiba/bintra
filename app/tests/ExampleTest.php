<?php

class ExampleTest extends TestCase {
	public function setUp()
	{
	  parent::setUp();
	 
	  $this->mockUserAuth = $this->mock('aitiba\UserAuth\UserAuthRepository');
	  $this->mockUser = $this->mock('aitiba\User\UserRepository');
	}
	
	/**
	 * User storage goes well.
	 *
	 * @param \Mockery\MockInterface
	 * @return \Mockery\MockInterface
	 */   
	public function mock($class)
	{
	  $mock = Mockery::mock($class);
	  
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
	
	 $this->mockUser->shouldReceive('validation')->once()->andReturn(\Mockery::mock('Illuminate\Http\RedirectResponse'));

	 $this->mockUser->shouldReceive('store')->once()->andReturn(false);
	 
	 $this->call('POST', 'users');

	 $this->assertRedirectedTo('users/create');

	}
}