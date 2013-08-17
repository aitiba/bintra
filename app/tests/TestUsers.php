<?php
namespace app\tests;
class TestUsers extends \Illuminate\Foundation\Testing\TestCase {

	public function tearDown()
	{
		parent::tearDown();
		\Mockery::close();
	}

	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

}