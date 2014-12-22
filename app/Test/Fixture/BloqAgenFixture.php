<?php
/**
 * BloqAgenFixture
 *
 */
class BloqAgenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'bloq_agen';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_OFERTA_HOR' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'identificador ?nico para oferta horaria
            '),
		'ID_AGENDA' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la solicitud de atenci?n realizada por un usuario'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ID_OFERTA_HOR', 'ID_AGENDA'), 'unique' => 1),
			'FK_CONTIENE' => array('column' => 'ID_AGENDA', 'unique' => 0)
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
			'ID_OFERTA_HOR' => 1,
			'ID_AGENDA' => 1
		),
	);

}
