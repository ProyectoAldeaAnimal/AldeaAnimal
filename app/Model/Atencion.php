<?php
App::uses('AppModel', 'Model');
/**
 * Atencion Model
 *
 * @property Pres $Pres
 * @property TipoPre $TipoPre
 * @property Ma $Ma
 * @property Pat $Pat
 */
class Atencion extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'atencion';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_ATENCION';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_ATENCION';


	public $validate = array(
	    'PESO' => array(
	    	  'age' => array(
		        'rule' => array('comparison', '>=', 0),
		        'message' => 'Debe tener al menos 18 años para calificar.',
		        'allowEmpty' => true
		    ),
            'decimal' => array(  

		        'rule' => array('decimal', 2),
		        'message' => 'El número debe ser decimal, ejemplo 1,00',
		        'allowEmpty' => true
	        )
	    ),
	    'TEMPERATURA' => array(
            'age' => array(
		        'rule' => array('comparison', '>=', 0),
		        'message' => 'Debe tener al menos 18 años para calificar.',
		        'allowEmpty' => true
		    ),
            'decimal' => array(   
		        'rule' => array('decimal', 2),
		        'message' => 'El número debe ser decimal, ejemplo 1,00'
	        )
		),
	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pre' => array(
			'className' => 'Pre',
			'foreignKey' => 'ID_PRES',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vet' => array(
			'className' => 'Vet',
			'foreignKey' => 'ID_vET',
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
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Pat' => array(
			'className' => 'Pat',
			'joinTable' => 'pat_atencion',
			'foreignKey' => 'ID_ATENCION',
			'associationForeignKey' => 'ID_PAT',
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
