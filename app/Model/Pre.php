<?php
App::uses('AppModel', 'Model');
/**
 * Pre Model
 *
 * @property TipoPre $TipoPre
 */
class Pre extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PRES';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_PRES';

	public $validate = array(
		'NOMBRE_PRES' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un nombre'
            )
        ),
        'NUMERO_BLOQUES' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un número'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Número inválido.'
            )   
        ),
        'PRECIO' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un número'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Número inválido.'
            )   
        )
     );


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoPre' => array(
			'className' => 'TipoPre',
			'foreignKey' => 'ID_TIPO_PRES',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
