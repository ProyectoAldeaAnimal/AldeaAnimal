<?php
/**
 * TipoExFixture
 *
 */
class TipoExFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_ex';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_TIPO_EX' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador  ?nico para el Tipo de Examen.'),
		'NOMBRE_TIPO_EX' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => 'Referencia caracter?stica al tipo de Examen.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_TIPO_EX', 'unique' => 1)
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
			'ID_TIPO_EX' => 1,
			'NOMBRE_TIPO_EX' => 'Lorem ipsum dolor sit amet'
		),
	);

}
