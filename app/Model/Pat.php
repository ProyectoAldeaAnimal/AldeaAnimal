<?php
App::uses('AppModel', 'Model');
/**
 * Pat Model
 *
 * @property Far $Far
 * @property Atencion $Atencion
 * @property TIPO_MA $TIPO_MA
 */
class Pat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pat';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PAT';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_PAT';

/**
 * Validation rules
 *
 * @var array
 */
public $validate = array(
		'NOMBRE_PAT' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un nombre'

            )
        ),
        'TIPO_PAT' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un Tipo de patología'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Tipo inválido.'
            )   
        ),
        'GRAVEDAD_PAT' => array(
            'login' => array(

                'rule' => 'alphaNumeric',
                'allowEmpty' => true,
                'message' => 'Gravedad inválido.'
            )   
        )
     );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Farmaco' => array(
			'className' => 'Farmaco',
			'joinTable' => 'far_pat',
			'foreignKey' => 'ID_PAT',
			'associationForeignKey' => 'ID_FAR',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Atencion' => array(
			'className' => 'Atencion',
			'joinTable' => 'pat_atencion',
			'foreignKey' => 'ID_PAT',
			'associationForeignKey' => 'ID_ATENCION',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'TipoMa' => array(
			'className' => 'TipoMa',
			'joinTable' => 'pat_mas',
			'foreignKey' => 'ID_PAT',
			'associationForeignKey' => 'ID_TIPO_MAS',
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
