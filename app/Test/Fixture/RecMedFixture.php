<?php
/**
 * RecMedFixture
 *
 */
class RecMedFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'rec_med';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID_RECETA' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador ?nico para la receta
            '),
		'ID_ATENCION' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Identificador ?nico de referencia a la atenci'),
		'TIPO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indica el tipo de la receta ,  R si es una receta con f?rmacos que se deben tomar, M si la receta correponde a una medicaci?n indicando si el f?rmaco fue medicado en la atenci', 'charset' => 'latin1'),
		'OBS_RECETA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Observaciones que se quieran agregar a la receta', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID_RECETA', 'unique' => 1),
			'FK_TIENE18' => array('column' => 'ID_ATENCION', 'unique' => 0)
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
			'ID_RECETA' => 1,
			'ID_ATENCION' => 1,
			'TIPO' => 'Lorem ipsum dolor sit ame',
			'OBS_RECETA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
