<?php
/**
 * ParFixture
 *
 */
class ParFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'par';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_PAR' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'TAM_BLOQUE' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'INICIO_VIGENCIA' => array('type' => 'date', 'null' => false, 'default' => null),
		'FIN_VIGENCIA' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_PAR', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID_PAR' => 1,
			'TAM_BLOQUE' => 1,
			'INICIO_VIGENCIA' => '2014-11-21',
			'FIN_VIGENCIA' => '2014-11-21'
		),
	);

}
