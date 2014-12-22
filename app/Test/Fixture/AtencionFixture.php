<?php
/**
 * AtencionFixture
 *
 */
class AtencionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'atencion';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'ID_PRES' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para el tipo de atenci'),
		'ID_MAS' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para la mascota.'),
		'ID_TIPO_PRES' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'identificador ?nico para el tipo de prestaci'),
		'FECHA_ATENCION' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual se realiz? la antenci?n m?dica.'),
		'PESO' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Peso que registr? la mascota en la anteci'),
		'TEMPERATURA' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Temperatura que registr? la mascota en la atenci'),
		'MOTIVO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Motivo en pocas palabras del porque se llev? a la mascota a la cl?nica.', 'charset' => 'latin1'),
		'ANAMNESIS' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Toda la informaci?n entregada por el paciente respecto a lo que observa en la mascota.', 'charset' => 'latin1'),
		'DIAGNOSTICO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Diagn?stico del m?dico veterinario en base a lo observado en la atenci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_ATENCION', 'unique' => 1),
			'FK_ES_UN2' => array('column' => 'ID_PRES', 'unique' => 0),
			'FK_REALIZA2' => array('column' => 'ID_TIPO_PRES', 'unique' => 0),
			'FK_REGISTRA2' => array('column' => 'ID_MAS', 'unique' => 0)
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
			'ID_ATENCION' => 1,
			'ID_PRES' => 1,
			'ID_MAS' => 1,
			'ID_TIPO_PRES' => 1,
			'FECHA_ATENCION' => '2014-11-29 20:42:07',
			'PESO' => 1,
			'TEMPERATURA' => 1,
			'MOTIVO' => 'Lorem ipsum dolor sit amet',
			'ANAMNESIS' => 'Lorem ipsum dolor sit amet',
			'DIAGNOSTICO' => 'Lorem ipsum dolor sit amet'
		),
	);

}
