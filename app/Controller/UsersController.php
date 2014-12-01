<?php 

class UsersController extends AppController{


			var $name='Users';
	
			var $uses=array('User');
			
			var $helpers = array('Form', 'Html', 'Js', 'Time');
			

			public $components = array('Email',
		        'Session','Paginator',
		       
		        'Auth' => array(
		            'loginRedirect' => array('controller' => 'users', 'action' => 'homeCliente'),
		            'logoutRedirect' => array('controller' => 'users', 'action' => 'home'),
		            'authorize' => array('Controller'), // Added this line
		            
			        'authenticate' => array(
			        	
			            'Form' => array(
			                'fields' => array(
			                    'username' => 'RUT_CLI',
			                   	'password' => 'PASSWORD_CLI'
			                )

			            )
			        ),


		        )
		    );

			public function beforeFilter() {
			    parent::beforeFilter();
                 $this->Auth->userModel = 'User';
     			 $this->Auth->allow('index', 'view');
			    // For CakePHP 2.1 and up
			  
			}


		        public function index() {
					$this->redirect(array('action' => 'homeCliente'));				    

}
			public function login() {


					if($this->Session->check('Auth.User')){
						
							$this->redirect($this->Auth->redirect());		
						}
				

				    if ($this->request->is('post')) {

						$usuario= $this->User->find('all',array(
							'conditions' => array(
									'User.RUT_CLI' => $this->request->data['User']['RUT_CLI'])
								)
						);
						


				    	if(($usuario[0]['User']['RUT_CLI'] == $this->request->data['User']['RUT_CLI']) &&
							($usuario[0]['User']['PASSWORD_CLI'] == Security::hash($this->request->data['User']['PASSWORD_CLI']))

						){

							$this->Auth->login($usuario);
							return $this->redirect($this->Auth->redirect());
						}
						else{
							
					            $this->Session->setFlash(
					                __('Rut o contraseña incorrecta'),
					                'default',
					                array(),
					                'auth'
					            );

						}
				
					 }
			}

			public function logout() {
			    return $this->redirect($this->Auth->logout());
			}

			public function add() {
				$this->set('title_for_layout', 'Agregar Cliente');
		        if ($this->request->is('post')) {
					
					$this->User->create();
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('El cliente ha sido creado'));
						$this->redirect(array('controller'=>'vets','action' => 'homeVet'));
					} else {
						$this->Session->setFlash(__('El cliente no puede ser creado!'));
					}	
		        }
		    }
		
			public function home(){
				$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));

			}
			public function homeCliente(){
				
			    $aro = $this->Auth->user();
			    //Si deseamos verificar la acción 'index', hija de 'Productos', a su vez hijo de 'controllers'.
			    $aco = 'Mas';
			  	
			    //Se chequean si el usuario tiene acceso a al ACO definido (se obtiene 1 si tiene permiso; 0 en caso que no lo tenga).
			    $permisoUsuario= $this->Acl->check(array(
					    'model' => 'Group',
					    'foreign_key' => $aro[0]['User']['ID_GROUP']
					), 'controllers/Mas');
			   

			}
			public function misDatos(){
				$this->set('title_for_layout', 'Mis Datos');
				$usuario = AuthComponent::user();
				$id = $usuario[0]['User']['ID'];
				if (!$this->User->exists($id)) {
					throw new NotFoundException(__('Invalid User'));
				}
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->set('User', $this->User->find('first', $options));

			}
			public function edit($id = null) {
				if (!$this->User->exists($id)) {
					throw new NotFoundException(__('Invalid cli'));
				}
				if ($this->request->is(array('post', 'put'))) {
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__('The User has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The User could not be saved. Please, try again.'));
					}
				} else {
					$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
					$this->request->data = $this->User->find('first', $options);
				}
				$groups = $this->User->Group->find('list');
				$this->set(compact('groups'));
			}

			public function misMascotas(){
				$this->set('title_for_layout', 'Mis Mascotas');

			}
			public function verDatosMascotas(){
				$this->set('title_for_layout', 'Ver Datos Mascotas');
				

		
				

				$this->loadModel('Ma');
				$usuario = AuthComponent::user();
				$id = $usuario[0]['User']['ID'];
				$mascotasCli= $this->Ma->query("SELECT * FROM mas WHERE ID =".$usuario[0]['User']['ID']);
				if($mascotasCli){
					$this->loadModel('TipoMa');
					//$this->loadModel('Ficha');
					$sql = "SELECT * FROM tipo_mas WHERE ID_TIPO_MAS =".$mascotasCli[0]['mas']['ID_TIPO_MAS'];

					//$sql2 = "SELECT * FROM ficha WHERE ID_MAS =".$mascotasCli[0]['mas']['ID_MAS'];

					for($i=1;$i< count($mascotasCli);$i++){
						$sql = $sql." OR ID_TIPO_MAS =".$mascotasCli[$i]['mas']['ID_TIPO_MAS'];
						//$sql2 = $sql2." OR ID_MAS =".$mascotasCli[$i]['mas']['ID_MAS'];

					}
					
					$tipos= $this->TipoMa->query($sql);
					//$fichas = $this->Ficha->query($sql2);
					$this->set(compact('mascotasCli','tipos'));
				}	
				else {
					$this->Session->setFlash(__('Usted no tiene mascotas inscritas en el sistema comuniquese con su veterinario.'));
					return $this->redirect(array('action' => 'misMascotas'));
				}
			}

			public function pre_solicitar_hora(){
				$this->set('title_for_layout', 'Solicitar Hora');
				$this->loadModel('Vet');
				$vets= $this->Vet->find('all');
				$vetes;
				foreach ($vets as $key => $vet) {
					$vetes[$vet['Vet']['ID_VET']] = $vet['Vet']['name'];
				}

				 if ($this->request->is('post')) {
				 	$data = $this->request->data;
				 	debug($data);
				 	$this->redirect(array('controller'=>'agendas','action' => 'add', '?'=> array('param'=>$data['TempVet']['ID_VET']),$data));
				 }
				
				$this->set(compact('vetes'));

			}
			public function editMascota($id){
				$this->redirect(array('controller' => 'mas', 'action' => 'edit',$id));

			}
			public function verMascota($id){
				$this->redirect(array('controller' => 'mas', 'action' => 'view',$id));

			}





}
?>