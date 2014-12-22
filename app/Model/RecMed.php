<?php
App::uses('AppModel', 'Model');
/**
 * RecMed Model
 *
 * @property Atencion $Atencion
 * @property Far $Far
 */
class RecMed extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rec_med';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_RECETA';


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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Farmaco' => array(
			'className' => 'Farmaco',
			'joinTable' => 'far_rec',
			'foreignKey' => 'ID_RECETA',
			'associationForeignKey' => 'ID_FAR',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
