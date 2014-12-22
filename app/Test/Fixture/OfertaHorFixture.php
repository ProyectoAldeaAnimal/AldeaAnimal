<?php
/**
 * OfertaHorFixture
 *
 */
class OfertaHorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'oferta_hor';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_OFERTA_HOR' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ID_CAL' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para el bloque del calendario.'),
		'RUT_VET' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => 'Rol ?nico tributario. Identifica el veterinario y este es ?nico.', 'charset' => 'latin1'),
		'ESTADO_AGENDAMIENTO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'Valor en caracteres que indica el estado del agendamiento.
            Este puede ser: \'A\' por aceptado, \'R\' por rechazado, \'L\' por libre.', 'charset' => 'latin1'),
		'HORA_INICIO' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'Hora del calendario gen?rico para relacionarlo con un veterinario.'),
		'HORA_TERMINO' => array('type' => 'time', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_OFERTA_HOR', 'unique' => 1),
			'FK_AGENDA' => array('column' => 'RUT_VET', 'unique' => 0),
			'FK_COMPRUEBA2' => array('column' => 'ID_CAL', 'unique' => 0)
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
			'ID_OFERTA_HOR' => 1,
			'ID_CAL' => 1,
			'RUT_VET' => 'Lorem ipsum dolor ',
			'ESTADO_AGENDAMIENTO' => 'Lorem ipsum dolor sit ame',
			'HORA_INICIO' => '02:24:22',
			'HORA_TERMINO' => '02:24:22'
		),
	);

}
