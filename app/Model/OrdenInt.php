<?php
App::uses('AppModel', 'Model');
/**
 * OrdenInt Model
 *
 * @property Atencion $Atencion
 * @property TipoDeInt $TipoDeInt
 */
class OrdenInt extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'orden_int';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_ORDEN_INT';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_ORDEN_INT';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Atencion' => array(
			'className' => 'Atencion',
			'foreignKey' => 'ID_ATENCION',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoDeInt' => array(
			'className' => 'TipoDeInt',
			'foreignKey' => 'ID_TIPO_INT',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
