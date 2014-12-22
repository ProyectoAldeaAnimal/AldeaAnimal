<?php
App::uses('AppModel', 'Model');
/**
 * Group Model
 *
 */
class Group extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_GRUPO';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBREGRUPO';

	public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        return null;
    }

}
