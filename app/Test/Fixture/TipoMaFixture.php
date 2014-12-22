<?php
/**
 * TipoMaFixture
 *
 */
class TipoMaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_TIPO_MAS' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para el tipo de mascota.'),
		'ESPECIE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Es la especie del tipo  de mascota que se quiere definir, Por ejemplo: Perro.', 'charset' => 'utf8'),
		'CLASE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Se refiere a la clase de la especie de tipo de mascota. Por ejemplo si se defini? que la especie del tipo de mascota es \'Perro\' , la clase ser?a \'Canino\'.', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_TIPO_MAS', 'unique' => 1)
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
			'ID_TIPO_MAS' => 1,
			'ESPECIE' => 'Lorem ipsu',
			'CLASE' => 'Lorem ipsu'
		),
	);

}
