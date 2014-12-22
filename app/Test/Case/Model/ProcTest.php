<?php
App::uses('Proc', 'Model');

/**
 * Proc Test Case
 *
 */
class ProcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proc',
		'app.atencion',
		'app.pre',
		'app.tipo_pre',
		'app.ma',
		'app.user',
		'app.group',
		'app.tipo_ma',
		'app.mas',
		'app.pat',
		'app.farmaco',
		'app.far_pat',
		'app.pat_atencion',
		'app.pat_ma'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proc = ClassRegistry::init('Proc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proc);

		parent::tearDown();
	}

}
