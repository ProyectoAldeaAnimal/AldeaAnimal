<?php
/**
 * PatFixture
 *
 */
class PatFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'pat';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_PAT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la patolog?a.'),
		'NOMBRE_PAT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre por el cual se referencia a la patolog?a.', 'charset' => 'latin1'),
		'TIPO_PAT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Tipo de la patolog?a, puede ser  bacteria, virus, hongo, etc.', 'charset' => 'latin1'),
		'GRAVEDAD_PAT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nivel de gravedad de la patolog?a. Puede ser Grave, Muy Grave, Fuera de Gravedad, Mortal, etc.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_PAT', 'unique' => 1)
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
			'ID_PAT' => 1,
			'NOMBRE_PAT' => 'Lorem ipsum dolor ',
			'TIPO_PAT' => 'Lorem ipsum dolor ',
			'GRAVEDAD_PAT' => 'Lorem ipsum dolor '
		),
	);

}
