<?php
/**
 * OrdenHospFixture
 *
 */
class OrdenHospFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'orden_hosp';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_ORDEN_HOSP' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la odern de hospitalizaci'),
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'FECHA_ORDEN_HOSP' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual la orden de Hospitalizaci'),
		'DURACION_ESTIMADA_HOSP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Una duraci?n estimada por el venterinario, durante la cual la mascota debe estar hospitalizada.', 'charset' => 'latin1'),
		'MOTIVO_HOSP' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'comment' => 'Motivo en pocas palabas por el cual la mascota debe ser hospitalizada.', 'charset' => 'latin1'),
		'FECHA_SUGERIDA_HOSP' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Indica una fecha estimada en la cual la mascota debe ser hospitalizada.'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_ORDEN_HOSP', 'unique' => 1),
			'FK_PUEDE_REQUERIR' => array('column' => 'ID_ATENCION', 'unique' => 0)
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
			'ID_ORDEN_HOSP' => 1,
			'ID_ATENCION' => 1,
			'FECHA_ORDEN_HOSP' => '2014-11-30 05:31:59',
			'DURACION_ESTIMADA_HOSP' => 'Lorem ipsum dolor ',
			'MOTIVO_HOSP' => 'Lorem ipsum dolor sit amet',
			'FECHA_SUGERIDA_HOSP' => '2014-11-30'
		),
	);

}
