<?php
App::uses('AppModel', 'Model');
/**
 * OrdenEx Model
 *
 * @property Tipoexs $Tipoexs
 * @property Atencion $Atencion
 */
class OrdenEx extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'orden_ex';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_ORDEN_EX';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_ORDEN_EX';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoEx' => array(
			'className' => 'TipoEx',
			'foreignKey' => 'ID_TIPO_EX',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Atencion' => array(
			'className' => 'Atencion',
			'foreignKey' => 'ID_ATENCION',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
