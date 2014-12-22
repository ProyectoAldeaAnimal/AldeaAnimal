<?php
App::uses('AppModel', 'Model');
/**
 * TipoEx Model
 *
 */
class TipoEx extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_ex';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_TIPO_EX';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_TIPO_EX';

}
