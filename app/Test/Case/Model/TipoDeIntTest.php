<?php
App::uses('TipoDeInt', 'Model');

/**
 * TipoDeInt Test Case
 *
 */
class TipoDeIntTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_de_int'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoDeInt = ClassRegistry::init('TipoDeInt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoDeInt);

		parent::tearDown();
	}

}
