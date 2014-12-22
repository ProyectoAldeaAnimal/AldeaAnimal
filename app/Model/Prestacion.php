<?php
	class Prestacion extends AppModel{

		public $useTable = 'pres';
		public $primaryKey= 'ID_PRES';
		public $displayField= 'NOMBRE_PRES';

		var $belongsTo = array('TipoPrestacion' =>
				array('className' => 'TipoPrestacion',
					'conditions' => '',
					'order' => '',
					'foreignKey' => 'ID_TIPO_PRES'
					)
				);
	
	}

?>