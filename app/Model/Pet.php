<?php
	class Pet extends AppModel{

		public $useTable = 'Mas';
		public $primaryKey= 'ID_MAS';

		var $belongsTo = array('User' =>
				array('className' => 'User',
					'conditions' => '',
					'order' => '',
					'foreignKey' => 'RUT_CLI'
					),
	
				'TipePet' =>
				array('className' => 'TipePet',
					'conditions' => '',
					'order' => '',
					'foreignKey' => 'ID_TIPO_MAS'
					)
				);
	}
?>