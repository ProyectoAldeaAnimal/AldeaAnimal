<?php
App::uses('AppModel', 'Model');
/**
 * TipoMa Model
 *
 * @property Mas $Mas
 */
class TipoMa extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_TIPO_MAS';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'CLASE';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mas' => array(
			'className' => 'Mas',
			'foreignKey' => 'ID_TIPO_MAS',
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
