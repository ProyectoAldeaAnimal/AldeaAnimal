<?php
App::uses('AppModel', 'Model');
/**
 * Proc Model
 *
 * @property Atencion $Atencion
 */
class Proc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'proc';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PROC';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'OBS_PROC';


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
