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
	public $useTable = 'tipo_mas';
	public $primaryKey = 'ID_TIPO_MAS';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'CLASE';

	public $validate = array(
		'ESPECIE' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese una especie'
            ),
            
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Ingrese una especie válido.'
            )  
        ),
        'CLASE' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un nombre de clase'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Ingrese un nombre de clase válido.'
            )   
        )
     );

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
