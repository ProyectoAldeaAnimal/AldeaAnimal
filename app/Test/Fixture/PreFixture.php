<?php
/**
 * PreFixture
 *
 */
class PreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_PRES' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para el tipo de atenci'),
		'ID_TIPO_PRES' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador del tipo de prestaci'),
		'NOMBRE_PRES' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre de referencia por el cual se puede identificar al tipo de atenci?n/prestaci', 'charset' => 'latin1'),
		'NUMERO_BLOQUES' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'N?mero de bloques que dura la atenci?n. Los bloques son definidos por la cl?nica en la tabla par'),
		'PRECIO' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Indica el precio de la prestaci'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_PRES', 'unique' => 1),
			'FK_PUEDE_SER16' => array('column' => 'ID_TIPO_PRES', 'unique' => 0)
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
			'ID_PRES' => 1,
			'ID_TIPO_PRES' => 1,
			'NOMBRE_PRES' => 'Lorem ipsum dolor sit amet',
			'NUMERO_BLOQUES' => 1,
			'PRECIO' => 1
		),
	);

}
