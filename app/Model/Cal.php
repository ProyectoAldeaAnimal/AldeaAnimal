<?php
App::uses('AppModel', 'Model');
/**
 * Cal Model
 *
 * @property oferta_hors $oferta_hors
 */
class Cal extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cal';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_CAL';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_CAL';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID_CAL' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'OfertaHor' => array(
			'className' => 'OfertaHor',
			'foreignKey' => 'ID_OFERTA_HOR',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
