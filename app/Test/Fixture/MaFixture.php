<?php
/**
 * MaFixture
 *
 */
class MaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_MAS' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la mascota.'),
		'ID_TIPO_MAS' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico para el tipo de mascota.'),
		'ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'NOMBRE_MAS' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Nombre  por el cual el due?o se refiere a su mascota.', 'charset' => 'utf8'),
		'RAZA_MAS' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 28, 'collate' => 'utf8_spanish_ci', 'comment' => 'Raza de la mascota, pueder Mestizo,', 'charset' => 'utf8'),
		'FECHA_NACIMIENTO' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual la mascota naci?, de desconocer dicha fecha, puede ser un aproximado.'),
		'SEXO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_spanish_ci', 'comment' => 'Es el g?nero de la mascota. 
            Puede ser \'M\' para macho y \'H\' para hembra.', 'charset' => 'utf8'),
		'COLOR' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 28, 'collate' => 'utf8_spanish_ci', 'comment' => 'Color dominante en la mascota, puede ser un mezcla.', 'charset' => 'utf8'),
		'CARACTERISTICA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'utf8_spanish_ci', 'comment' => 'Se refiere a cualquier caracter?stica extra que el veterinario quiere aportar al ingresar la mascota al sistema, por ejemplo : si le falta alguna pata, caracter, cola cortada, etc.', 'charset' => 'utf8'),
		'FECHA_DEFUNCION' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Indica la fecha en la cual la mascota muri'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_MAS', 'unique' => 1),
			'FK_ES' => array('column' => 'ID_TIPO_MAS', 'unique' => 0),
			'FK_TIENE2' => array('column' => 'ID', 'unique' => 0)
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
			'ID_MAS' => 1,
			'ID_TIPO_MAS' => 1,
			'ID' => 1,
			'NOMBRE_MAS' => 'Lorem ipsu',
			'RAZA_MAS' => 'Lorem ipsum dolor sit amet',
			'FECHA_NACIMIENTO' => '2014-11-23',
			'SEXO' => 'Lorem ipsum dolor sit ame',
			'COLOR' => 'Lorem ipsum dolor sit amet',
			'CARACTERISTICA' => 'Lorem ipsum dolor sit amet',
			'FECHA_DEFUNCION' => '2014-11-23'
		),
	);

}
