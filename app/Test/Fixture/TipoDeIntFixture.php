<?php
/**
 * TipoDeIntFixture
 *
 */
class TipoDeIntFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_de_int';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_TIPO_INT' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador  ?nico para el Tipo de intervenci'),
		'NOMBRE_TIPO_INT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => 'Referencia caracter?stica al tipo de intervenci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_TIPO_INT', 'unique' => 1)
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
			'ID_TIPO_INT' => 1,
			'NOMBRE_TIPO_INT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
