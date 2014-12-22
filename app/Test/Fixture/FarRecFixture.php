<?php
/**
 * FarRecFixture
 *
 */
class FarRecFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'far_rec';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_FAR' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para el f?rmaco
            .'),
		'ID_RECETA' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la receta'),
		'POSOLOGIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'comment' => 'Cantidad y frecuencia en la cual el medicamento debe ser administrado.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ID_FAR', 'ID_RECETA'), 'unique' => 1),
			'FK_TIENE6' => array('column' => 'ID_RECETA', 'unique' => 0)
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
			'ID_FAR' => 1,
			'ID_RECETA' => 1,
			'POSOLOGIA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
