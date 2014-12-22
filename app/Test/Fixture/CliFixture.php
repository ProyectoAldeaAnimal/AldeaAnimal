<?php
/**
 * CliFixture
 *
 */
class CliFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cli';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ID_GROUP' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'RUT_CLI' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish_ci', 'comment' => 'Rol ?nico tributario que identifica el cliente.', 'charset' => 'utf8'),
		'NOMBRE_CLI' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Nombre por el cual se referencia a cliente, y por el cual el sistema lo reconoce.', 'charset' => 'utf8'),
		'APELLIDO_PCLI' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Apellido del padre del cliente.', 'charset' => 'utf8'),
		'APELLIDO_MCLI' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'Apellido de la madre del cliente.', 'charset' => 'utf8'),
		'MAIL_CLI' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_spanish_ci', 'comment' => 'Direcci?n e-mail por la cual se puede contactar al cliente. Muy importante para el envio de notificaciones.', 'charset' => 'utf8'),
		'TEL_CLI' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_spanish_ci', 'comment' => 'N?mero de tel?fono por el cual se puede conectar al cliente.', 'charset' => 'utf8'),
		'FECHA_REGISTRO_CLI' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha en la cual el cliente fue registrado en el sistema.'),
		'DIR_CLI' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_spanish_ci', 'comment' => 'Ubicaci?n de la vivienda del cliente.', 'charset' => 'utf8'),
		'HABILITADO_CLI' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'Indica si el ciente se encuentra habilitado para acceder a los servicios de la cl?nica.
            \'H\' indica habilitado.
            \'D\' indica deshabilitado.'),
		'PASSWORD_CLI' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'FK_REFERENCE_40' => array('column' => 'ID_GROUP', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'ID_GROUP' => 1,
			'RUT_CLI' => 'Lorem ipsum dolor ',
			'NOMBRE_CLI' => 'Lorem ipsu',
			'APELLIDO_PCLI' => 'Lorem ipsu',
			'APELLIDO_MCLI' => 'Lorem ipsu',
			'MAIL_CLI' => 'Lorem ipsum dolor sit amet',
			'TEL_CLI' => 'Lorem ipsu',
			'FECHA_REGISTRO_CLI' => '2014-11-23',
			'DIR_CLI' => 'Lorem ipsum dolor sit amet',
			'HABILITADO_CLI' => 1,
			'PASSWORD_CLI' => 'Lorem ipsum dolor sit amet'
		),
	);

}
