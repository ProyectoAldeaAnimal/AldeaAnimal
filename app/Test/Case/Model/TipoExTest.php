<?php
App::uses('TipoEx', 'Model');

/**
 * TipoEx Test Case
 *
 */
class TipoExTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_ex'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoEx = ClassRegistry::init('TipoEx');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoEx);

		parent::tearDown();
	}

}
