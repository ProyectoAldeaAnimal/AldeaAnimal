<?php
App::uses('TipoMa', 'Model');

/**
 * TipoMa Test Case
 *
 */
class TipoMaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_ma',
		'app.mas'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoMa = ClassRegistry::init('TipoMa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoMa);

		parent::tearDown();
	}

}
