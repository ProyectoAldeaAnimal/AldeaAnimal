<?php
App::uses('Cli', 'Model');

/**
 * Cli Test Case
 *
 */
class CliTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cli',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cli = ClassRegistry::init('Cli');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cli);

		parent::tearDown();
	}

}
