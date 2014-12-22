<?php
App::uses('Cal', 'Model');

/**
 * Cal Test Case
 *
 */
class CalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cal',
		'app.oferta_hors'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cal = ClassRegistry::init('Cal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cal);

		parent::tearDown();
	}

}
