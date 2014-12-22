<?php 

class AuditorController extends AppController{

	public $helpers = array('Html','Form');
	public $components = array('Session');



public function index(){
		$this->redirect(array('controller' => 'pages', 'action' => 'display', 'auditoria'));

	}

}
?>