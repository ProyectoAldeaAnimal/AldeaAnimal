<?php
App::uses('Par', 'Model');

/**
 * Par Test Case
 *
 */
class ParTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.par'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Par = ClassRegistry::init('Par');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Par);

		parent::tearDown();
	}

}
