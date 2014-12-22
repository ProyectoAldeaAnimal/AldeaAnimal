<?php
/**
 * AgendaFixture
 *
 */
class AgendaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'agenda';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_AGENDA' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la solicitud de atenci?n realizada por un usuario'),
		'ID_MASCOTA' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para la mascota.'),
		'ID_VET' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'VET_ID_VET' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ESTADO_AGENDA' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_AGENDA', 'unique' => 1),
			'FK_ES_DEL_TIPO' => array('column' => 'ID_VET', 'unique' => 0),
			'FK_SELECCIONA' => array('column' => 'VET_ID_VET', 'unique' => 0),
			'FK_SOLICITA' => array('column' => 'ID_MASCOTA', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID_AGENDA' => 1,
			'ID_MASCOTA' => 1,
			'ID_VET' => 1,
			'VET_ID_VET' => 1,
			'ESTADO_AGENDA' => 'Lorem ipsum dolor sit ame'
		),
	);

}
