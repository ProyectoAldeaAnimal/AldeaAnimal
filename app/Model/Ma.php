<?php
App::uses('AppModel', 'Model');
/**
 * Ma Model
 *
 * @property User $User
 * @property TipoMas $TipoMas
 */
class Ma extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_MAS';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_MAS';



	public $validate = array(
		'NOMBRE_MAS' => array(
	        'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un nombre válido'
	            ),
            'login' => array(
	                'rule' => 'alphaNumeric',
	                'message' => 'Nombre inválido.'
	            )
		    ),
		'RAZA_MAS' => array(
		    'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese una raza válido'
	            ),
            'login' => array(
	                'rule' => 'alphaNumeric',
	                'message' => 'Raza inválido.'
	            )
		    ),
	    'SEXO' => array(
		        'rule' => array('inList', array('H', 'M')),
		        'message' => 'Ingrese H para Hembra o M para Macho.'
	    	)
    	
	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoMa' => array(
			'className' => 'TipoMa',
			'foreignKey' => 'ID_TIPO_MAS',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
