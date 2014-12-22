<?php
App::uses('AppModel', 'Model');
/**
 * Cli Model
 *
 * @property Group $Group
 */
class Cli extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cli';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'ID_GROUP',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
