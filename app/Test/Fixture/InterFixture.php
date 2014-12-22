<?php
/**
 * InterFixture
 *
 */
class InterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'inter';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_INT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador  ?nico para la Intervenci'),
		'ID_ORDEN_INT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para la orden de intervenci'),
		'ID_VET' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FECHA_INGRESO_INT' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual la mascota ingreso al pabell?n de intervenci'),
		'FECHA_TERMINO_INT' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Fecha en la cual la intervenci?n termin'),
		'OBS_INT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Todas aquellas observaciones adicionales que el veterinario estime conveniente precisar.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_INT', 'unique' => 1),
			'FK_PUEDE_GENERAR' => array('column' => 'ID_ORDEN_INT', 'unique' => 0),
			'FK_REALIZA3' => array('column' => 'ID_VET', 'unique' => 0)
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
			'ID_INT' => 1,
			'ID_ORDEN_INT' => 1,
			'ID_VET' => 1,
			'FECHA_INGRESO_INT' => '2014-11-30 05:51:00',
			'FECHA_TERMINO_INT' => '2014-11-30 05:51:00',
			'OBS_INT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
