<?php
App::uses('AuthComponent', 'Controller/Component');
class Vet extends AppModel {
public $useTable = 'vet';
public $primaryKey = 'ID_VET';
public $name = 'Vet';
public $virtualFields = array(
    'name' => 'CONCAT(Vet.NOMBRE_VET, " ", Vet.APELLIDO_PVET, " ",Vet.APELLIDO_MVET)'
);
public $displayField = 'name';


public $validate = array(
        'RUT_VET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un rut válido'
            )
        ),
        'NOMBRE_VET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese un nombre'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Nombre inválido.'
            )   
        ),
        'APELLIDO_PVET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese su apellido paterno'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Apellido inválido.'
            )
        ),
        'APELLIDO_MVET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese su apellido materno'
            ),
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Apellido inválido.'
            )
        ),
        'MAIL_VET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingrese su e-mail'
            ),
            'email' => array(
                'rule' => array('email', true),
                'message' => 'Ingrese un mail válido.'
            )   

        ),

        'TEL_VET' => array(
            'login' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Teléfono inválido.',
                'allowEmpty' => true
            )
        ),
        'PASSWORD_VET' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )

    );

    public $hasMany = array(
        'OfertaHor' => array(
            'className' => 'OfertaHor',
            'foreignKey' => 'ID_OFERTA_HOR',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
       public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'ID_GROUP',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['Vet']['ID_GROUP'])) {
            $groupId = $this->data['Vet ']['ID_GROUP'];
        } else {
            $groupId = $this->field('ID_GROUP');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('ID_GROUP' => $groupId));
        }
    }

	public function beforeSave($options = array()) {
            // hash our password
        
        if (isset($this->data[$this->alias]['PASSWORD_VET'])) {
            $this->data[$this->alias]['PASSWORD_VET'] = Security::hash($this->data[$this->alias]['PASSWORD_VET']);
        }
        
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['PASSWORD_VET'] = Security::hash($this->data[$this->alias]['password_update']);
        }
            return parent::beforeSave($options);
        }
	}
?>