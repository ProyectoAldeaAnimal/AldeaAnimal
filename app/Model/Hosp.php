<?php
App::uses('AppModel', 'Model');
/**
 * Hosp Model
 *
 * @property Vet $Vet
 * @property OrdenHosp $OrdenHosp
 */
class Hosp extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hosp';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_HOSP';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_INGRESO_HOSP';


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
		'OrdenHosp' => array(
			'className' => 'OrdenHosp',
			'foreignKey' => 'ID_ORDEN_HOSP',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
