<?php
App::uses('Pre', 'Model');

/**
 * Pre Test Case
 *
 */
class PreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pre',
		'app.tipo_pre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pre = ClassRegistry::init('Pre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pre);

		parent::tearDown();
	}

}
