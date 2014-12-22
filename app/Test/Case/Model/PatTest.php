<?php
App::uses('Pat', 'Model');

/**
 * Pat Test Case
 *
 */
class PatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pat',
		'app.far',
		'app.far_pat',
		'app.atencion',
		'app.pat_atencion',
		'app.t_i_p_o__m_a',
		'app.p_a_t_m_a'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pat = ClassRegistry::init('Pat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pat);

		parent::tearDown();
	}

}
