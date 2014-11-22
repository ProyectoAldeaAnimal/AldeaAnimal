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

}
