<?php
/**
 * FichaFixture
 *
 */
class FichaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ficha';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_MAS' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la mascota.'),
		'ESTERILIZACION' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Valor booleano que indica si la mascota se encuentra esterilizada o no.'),
		'FECHA_ESTERILIZACION' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Fecha en la cual la mascota fue esterilizada.'),
		'FECHA_INGRESO' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Indica la fecha en la cual la mascota fue ingresada al sistema de la cl?nica.'),
		'OBS_ESTERILIZACION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Todas aquellas observaciones adicionales que el veterinario estime conveniente precisar.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_MAS', 'unique' => 1)
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
			'ID_MAS' => 1,
			'ESTERILIZACION' => 1,
			'FECHA_ESTERILIZACION' => '2014-12-01',
			'FECHA_INGRESO' => '2014-12-01',
			'OBS_ESTERILIZACION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
