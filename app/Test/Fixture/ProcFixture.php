<?php
/**
 * ProcFixture
 *
 */
class ProcFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'proc';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_PROC' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'identificador ?nico para un procedimiento realizado en la atenci'),
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'OBS_PROC' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Todas aquellas observaciones adicionales que el veterinario estime conveniente precisar.', 'charset' => 'latin1'),
		'FECHA_SGTE_PROC' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Indica la fecha del siguiente procedimiento'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_PROC', 'unique' => 1),
			'FK_PUEDE_GENERAR_UN' => array('column' => 'ID_ATENCION', 'unique' => 0)
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
			'ID_PROC' => 1,
			'ID_ATENCION' => 1,
			'OBS_PROC' => 'Lorem ipsum dolor sit amet',
			'FECHA_SGTE_PROC' => '2014-12-02'
		),
	);

}
