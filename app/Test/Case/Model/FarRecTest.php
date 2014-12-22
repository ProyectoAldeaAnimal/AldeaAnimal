<?php
App::uses('FarRec', 'Model');

/**
 * FarRec Test Case
 *
 */
class FarRecTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.far_rec'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FarRec = ClassRegistry::init('FarRec');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FarRec);

		parent::tearDown();
	}

}
