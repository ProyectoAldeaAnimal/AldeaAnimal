<?php
/**
 * OrdenIntFixture
 *
 */
class OrdenIntFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'orden_int';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_ORDEN_INT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la orden de intervenci'),
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'ID_TIPO_INT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador  ?nico para el Tipo de intervenci'),
		'FECHA_SUGERIDA_INT' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Es una fecha a priori en la cual se puede realizar la intervenci'),
		'MOTIVO_INT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'comment' => 'Atributo que indica en pocas palabras, el motivo por el cual se va a realizar la intervenci?n a la mascota.', 'charset' => 'latin1'),
		'FECHA_ORDEN_INT' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual la orden de Intervenci?nfue emitida,'),
		'DURACION_ESTIMADA_INT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Este atributo indica una duraci?n en tiempo aproximada y estimada con anterioridad por el veterinario.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_ORDEN_INT', 'unique' => 1),
			'FK_PUEDE_NECESITAR' => array('column' => 'ID_ATENCION', 'unique' => 0),
			'FK_TIENE10' => array('column' => 'ID_TIPO_INT', 'unique' => 0)
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
			'ID_ORDEN_INT' => 1,
			'ID_ATENCION' => 1,
			'ID_TIPO_INT' => 1,
			'FECHA_SUGERIDA_INT' => '2014-11-30',
			'MOTIVO_INT' => 'Lorem ipsum dolor sit amet',
			'FECHA_ORDEN_INT' => '2014-11-30 05:13:06',
			'DURACION_ESTIMADA_INT' => 'Lorem ipsum dolor '
		),
	);

}
