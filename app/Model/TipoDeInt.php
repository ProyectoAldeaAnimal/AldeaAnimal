<?php
App::uses('AppModel', 'Model');
/**
 * TipoDeInt Model
 *
 */
class TipoDeInt extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_de_int';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_TIPO_INT';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_TIPO_INT';

}
