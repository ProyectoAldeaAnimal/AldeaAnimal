<?php
/**
 * TipoPreFixture
 *
 */
class TipoPreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_TIPO_PRES' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'identificador ?nico para el tipo de prestaci'),
		'NOMBRE_TIPO_PRES' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indica el nombre del tipo prestaci?n, Medica o Cosmetica', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_TIPO_PRES', 'unique' => 1)
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
			'ID_TIPO_PRES' => 1,
			'NOMBRE_TIPO_PRES' => 'Lorem ipsum dolor sit amet'
		),
	);

}
