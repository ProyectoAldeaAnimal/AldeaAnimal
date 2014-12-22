<?php
App::uses('AppModel', 'Model');
/**
 * OfertaHor Model
 *
 * @property vet $vet
 * @property cal $cal
 */
class OfertaHor extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'oferta_hor';
	public $name = 'OfertaHor';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_OFERTA_HOR';

/**
 * Display field
 *
 * @var string
 */
	public $virtualFields = array(
	    'name' => 'CONCAT(OfertaHor.HORA_INICIO)'
	);
	public $displayField = 'name';


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID_OFERTA_HOR' => array(
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


 
	public $belongsTo = array(
		'Vet' => array(
			'className' => 'Vet',
			'foreignKey' => 'ID_VET',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cal' => array(
			'className' => 'Cal',
			'foreignKey' => 'ID_CAL',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
