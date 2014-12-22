<?php
/**
 * CalFixture
 *
 */
class CalFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cal';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_CAL' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para el bloque del calendario.'),
		'FECHA_CAL' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha del calendario gen?rico para relacionarlo con un veterinario.'),
		'DIA_TRABAJADO' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Indica si el dia corresponde o no a un dia laboral. Si es 1 el dia ser? considerado como trabajado, si es 0 corresponde a un dia que no es trabajado o feriado laboral '),
		'NOMBRE_DIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indica el nombre del dia, Lunes, Martes , Mi?rcoles, Jueves , Viernes,S?bado y Domingo', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_CAL', 'unique' => 1)
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
			'ID_CAL' => 1,
			'FECHA_CAL' => '2014-11-20',
			'DIA_TRABAJADO' => 1,
			'NOMBRE_DIA' => ''
		),
	);

}
