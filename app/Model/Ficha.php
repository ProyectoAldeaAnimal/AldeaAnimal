<?php
App::uses('AppModel', 'Model');
/**
 * Ficha Model
 *
 */
class Ficha extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ficha';

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
	public $displayField = 'FECHA_INGRESO';

}
