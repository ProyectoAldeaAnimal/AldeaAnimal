<?php
/**
 * OrdenExFixture
 *
 */
class OrdenExFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'orden_ex';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_ORDEN_EX' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la orden de examen.'),
		'ID_TIPO_EX' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador  ?nico para el Tipo de Examen.'),
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'FECHA_ORDEN_EX' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Este atributo indica la fecha en la cual la orden de examen fue emitida.'),
		'MOTIVO_EX' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'comment' => 'Este atributo indica en unas cuantas palabras el motivo por el cual se solicito el examen.', 'charset' => 'latin1'),
		'PLAZO_SUGERIDO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'comment' => 'Este atributo indica un plazo en el cual el examen tiene que estar listo. Claramente es sugerido, ya que no existe la forma de obligar al cliente a realizar el examen el aguno fecha estipulada.', 'charset' => 'latin1'),
		'OBS_ORDEN_EX' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Todas aquellas observaciones adicionales que el veterinario estime conveniente precisar.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_ORDEN_EX', 'unique' => 1),
			'FK_ES_UN' => array('column' => 'ID_TIPO_EX', 'unique' => 0),
			'FK_PUEDE_REQUERIR3' => array('column' => 'ID_ATENCION', 'unique' => 0)
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
			'ID_ORDEN_EX' => 1,
			'ID_TIPO_EX' => 1,
			'ID_ATENCION' => 1,
			'FECHA_ORDEN_EX' => '2014-11-30',
			'MOTIVO_EX' => 'Lorem ipsum dolor sit amet',
			'PLAZO_SUGERIDO' => 'Lorem ipsum dolor sit amet',
			'OBS_ORDEN_EX' => 'Lorem ipsum dolor sit amet'
		),
	);

}
