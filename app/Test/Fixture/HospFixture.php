<?php
/**
 * HospFixture
 *
 */
class HospFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hosp';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_HOSP' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador  ?nico para la hospitalizaci'),
		'ID_ORDEN_HOSP' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para la odern de hospitalizaci'),
		'ID_VET' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FECHA_INGRESO_HOSP' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Este atributo indica en que fecha la mascota ingres? a la cl?nica para su hospitalizaci'),
		'FECHA_ALTA' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Este atributo indica una la fecha en la cual se di? de alta a la mascota, es decir, puede retirarse del hospital e ir a su casa a descanzar.'),
		'CANIL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indica en que canil se encuentra la mascota hospitalizada.', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_HOSP', 'unique' => 1),
			'FK_ES_ENCARGADO' => array('column' => 'ID_VET', 'unique' => 0),
			'FK_PUEDE_GENERAR2' => array('column' => 'ID_ORDEN_HOSP', 'unique' => 0)
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
			'ID_HOSP' => 1,
			'ID_ORDEN_HOSP' => 1,
			'ID_VET' => 1,
			'FECHA_INGRESO_HOSP' => '2014-11-30 06:05:30',
			'FECHA_ALTA' => '2014-11-30 06:05:30',
			'CANIL' => 'Lorem ipsum dolor sit a'
		),
	);

}
