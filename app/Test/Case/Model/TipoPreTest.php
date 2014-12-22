<?php
App::uses('TipoPre', 'Model');

/**
 * TipoPre Test Case
 *
 */
class TipoPreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_pre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoPre = ClassRegistry::init('TipoPre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoPre);

		parent::tearDown();
	}

}
