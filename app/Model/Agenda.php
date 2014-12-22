<?php
App::uses('AppModel', 'Model');
/**
 * Agenda Model
 *
 * @property Vet $Vet
 * @property Ma $Ma
 * @property OfertaHor $OfertaHor
 */
class Agenda extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'agenda';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_AGENDA';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ESTADO_AGENDA';


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
		'Ma' => array(
			'className' => 'Ma',
			'foreignKey' => 'ID_MAS',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pre' => array(
			'className' => 'Pre',
			'foreignKey' => 'ID_PRES',
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
		'OfertaHor' => array(
			'className' => 'OfertaHor',
			'joinTable' => 'bloq_agen',
			'foreignKey' => 'ID_OFERTA_HOR',
			'associationForeignKey' => 'ID_AGENDA',
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
