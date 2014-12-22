<?php
App::uses('AppModel', 'Model');
/**
 * Inter Model
 *
 * @property Vet $Vet
 * @property OrdenInt $OrdenInt
 */
class Inter extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'inter';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_INT';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_INGRESO_INT';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vet' => array(
			'className' => 'Vet',
			'foreignKey' => 'ID_VET',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrdenInt' => array(
			'className' => 'OrdenInt',
			'foreignKey' => 'ID_ORDEN_INT',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
