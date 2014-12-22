<?php
App::uses('AppModel', 'Model');
/**
 * Par Model
 *
 */
class Par extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'par';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PAR';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'TAM_BLOQUE';


	public $validate = array(
	    'TAM_BLOQUE' => array(
	    	  'age' => array(
		        'rule' => array('comparison', '>=', 0),
		        'message' => 'El bloque debe ser un número positivo.'
		    )
	));
}
