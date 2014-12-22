<?php
App::uses('AppModel', 'Model');
/**
 * OrdenHosp Model
 *
 * @property Atencion $Atencion
 */
class OrdenHosp extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'orden_hosp';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_ORDEN_HOSP';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_ORDEN_HOSP';


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
		)
	);
}
