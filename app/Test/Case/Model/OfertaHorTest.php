<?php
App::uses('OfertaHor', 'Model');

/**
 * OfertaHor Test Case
 *
 */
class OfertaHorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.oferta_hor',
		'app.vet',
		'app.cal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OfertaHor = ClassRegistry::init('OfertaHor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OfertaHor);

		parent::tearDown();
	}

}
