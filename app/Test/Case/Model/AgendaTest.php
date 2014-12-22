<?php
App::uses('Agenda', 'Model');

/**
 * Agenda Test Case
 *
 */
class AgendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agenda',
		'app.vet',
		'app.oferta_hor',
		'app.cal',
		'app.ma',
		'app.user',
		'app.group',
		'app.tipo_ma',
		'app.mas',
		'app.bloq_agen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agenda = ClassRegistry::init('Agenda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agenda);

		parent::tearDown();
	}

}
