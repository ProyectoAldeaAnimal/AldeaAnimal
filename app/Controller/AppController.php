<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	 public $components = array(
        'Acl',
        'Auth',
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function isAuthorized() {


			$userId = $this->Auth->user();
			$params =$this->request->params;
			$controller = $params['controller'];
			$controller = ucwords($controller);
			$action;
			if($params['action']) $action= $params['action'];

			if(key($userId[0])=='User')
			if(!$userId[0]['User']['HABILITADO_CLI'] && $action!= 'deshabilitado' && key($userId[0])=='User' &&  $action!= 'logout') $this->redirect(array('controller'=>'user','action' => 'deshabilitado'));
			//debug('controllers/'.$controller.'/'.$action);
			if(key($userId[0])=='Vet')
			if(!$userId[0]['Vet']['HABILITADO'] && $action!= 'deshabilitado' && key($userId[0])=='Vet' &&  $action!= 'logout') $this->redirect(array('controller'=>'vets','action' => 'deshabilitado'));



			if(key($userId[0])=='Vet'){
				if($params['action']){
					$permisoUsuario= $this->Acl->check(array(
						    'model' => 'Group',
							    'foreign_key' => $userId[0]['Vet']['ID_GROUP']
							), 'controllers/'.$controller.'/'.$action);
							
				}
				else{

					/*	if($params['action']=='homeAdministrador' && $userId[0]['Vet']['ID_GROUP']==2){
							$permisoUsuario= $this->Acl->check(array(
						    'model' => 'Group',
							    'foreign_key' => $userId[0]['Vet']['ID_GROUP']
							), 'controllers/'.$controller.'/'.$action);
						}
						else if($params['action']=='homeVet' && $userId[0]['Vet']['ID_GROUP']==3){
							$permisoUsuario= $this->Acl->check(array(
						    'model' => 'Group',
							    'foreign_key' => $userId[0]['Vet']['ID_GROUP']
							), 'controllers/'.$controller.'/'.$action);
						}*/
					//	else{
							$permisoUsuario= $this->Acl->check(array(
							    'model' => 'Group',
								    'foreign_key' => $userId[0]['Vet']['ID_GROUP']
								), 'controllers/'.$controller);
					//	}	
						
					}
				}
			else if(key($userId[0])=='User'){
					if($params['action'] && $params['controller']!= 'users'){
						$permisoUsuario= $this->Acl->check(array(
							    'model' => 'Group',
								    'foreign_key' => $userId[0]['User']['ID_GROUP']
								), 'controllers/'.$controller.'/'.$action);
					}
					else{
						$permisoUsuario= $this->Acl->check(array(
							    'model' => 'Group',
								    'foreign_key' => $userId[0]['User']['ID_GROUP']
								), 'controllers/'.$controller);
						}
			}

			if($permisoUsuario){
				return true;
			}
			else{
				// HABILITA O DESAHABILITA LA SEGURIDAD
				return false;
			}
						
	}
    public function beforeFilter() {
    //Configure AuthComponent
	    $this->Auth->loginAction = array(
	      'controller' => 'users',
	      'action' => 'login'
	    );
	   
	     $this->Auth->loginError = 'El nombre de usuario y/o la contraseña no son correctos. Por favor, inténtalo otra vez';
         $this->Auth->authError = 'Para entrar en la zona privada tienes que autenticarte';
         $this->Auth->allow(array('display','login'));
         if($this->name=='Pres')  $this->Auth->allow(array('catalogo'));
         $this->Auth->authorize = 'controller';
	}
}	

?>