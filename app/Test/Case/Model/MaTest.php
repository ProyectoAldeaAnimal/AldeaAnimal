<?php
App::uses('Ma', 'Model');

/**
 * Ma Test Case
 *
 */
class MaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ma',
		'app.user',
		'app.group',
		'app.tipo_mas'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ma = ClassRegistry::init('Ma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ma);

		parent::tearDown();
	}

}
