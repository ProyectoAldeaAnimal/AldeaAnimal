<?php
App::uses('BloqAgen', 'Model');

/**
 * BloqAgen Test Case
 *
 */
class BloqAgenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bloq_agen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BloqAgen = ClassRegistry::init('BloqAgen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BloqAgen);

		parent::tearDown();
	}

}
