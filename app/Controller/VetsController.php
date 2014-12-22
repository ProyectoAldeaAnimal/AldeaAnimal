<?php
App::uses('AppController', 'Controller');
/**
 * Vets Controller
 *
 * @property Vet $Vet
 * @property PaginatorComponent $Paginator
 */
class VetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	var $name='Vets';
	
			var $uses=array('Vets');
			
			var $helpers = array('Form', 'Html', 'Js', 'Time');
			

			public $components = array('Email',
		        'Session','Paginator',
		        
		        'Auth' => array(
		            'loginRedirect' => array('controller' => 'vets', 'action' => 'homeVet'),
	            	'logoutRedirect' => array('controller' => 'vets', 'action' => 'login'),
		            'authorize' => array('Controller'), // Added this line
		            
			        'authenticate' => array(
			        	
			            'Form' => array(
			                'fields' => array(
			                    'username' => 'RUT_VET',
			                   	'password' => 'PASSWORD_VET'
			                ),
			            'userModel' => 'Vet'

			            ),
		            	'Basic' =>array('userModel' => 'Vet')
			        ),


		        )
		    );


/**
 * index method
 *
 * @return void
 */
	public function index(){
		$this->redirect(array('controller' => 'vets','action' => 'login'));
	}

	public function registro_vet() {
		$this->set('title_for_layout', 'Registro Veterinarios');
		$this->loadModel('Vet');
		$this->Vet->recursive = 0;
		$vets = $this->Paginator->paginate('Vet');
		$this->set(compact('vets'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */public function beforeFilter() {
			    parent::beforeFilter();
                 $this->Auth->userModel = 'User';
     			 $this->Auth->allow('index', 'view');
			    // For CakePHP 2.1 and up
			  
			}

	public function login() {
				$this->set('title_for_layout', 'Login Veterinarios');
				if($this->Session->check('Auth.User')){
							$vet = AuthComponent::user();

							if ($vet[0]['Vet']['ID_GROUP']== 3){
				
								$this->redirect( array('controller' => 'vets', 'action' => 'homeAdministrador'));

							}
							else 
								{
									$this->redirect( array('controller' => 'vets', 'action' => 'homeVet'));

								}
					}
					
				    if ($this->request->is('post')) {


    						$this->loadModel('Vet');
							$vet= $this->Vet->find('all',array(
									'conditions' => array(
											'VET.RUT_VET' => $this->request->data['Vet']['RUT_VET'])
										)
								);

							if(count($vet)<1){
								$this->Session->setFlash(
						                __('Rut o contraseña incorrecta'),
						                'default',
						                array(),
						                'auth'
						            );
								return $this->redirect(array('action'=>'login'));
							}

							if($this->request->data['Vet']['rol']== 'Administrador' && $vet[0]['Vet']['ID_GROUP'] ==3){



							    if(($vet[0]['Vet']['RUT_VET'] == $this->request->data['Vet']['RUT_VET']) &&
										($vet[0]['Vet']['PASSWORD_VET'] == Security::hash($this->request->data['Vet']['PASSWORD_VET']))

									){
							    		$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeAdministrador');
										$this->Auth->login($vet);
										return $this->redirect($this->Auth->redirect());

									}

								else {

						            $this->Session->setFlash(
						                __('Rut o contraseña incorrecta'),
						                'default',
						                array(),
						                'auth'
						            );
						        }
									

							}
							else if($this->request->data['Vet']['rol']== 'Veterinario' && $vet[0]['Vet']['ID_GROUP'] ==2){
								if(($vet[0]['Vet']['RUT_VET'] == $this->request->data['Vet']['RUT_VET']) &&
										($vet[0]['Vet']['PASSWORD_VET'] == Security::hash($this->request->data['Vet']['PASSWORD_VET']))

									){
							    		$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeVet');
										$this->Auth->login($vet);
										return $this->redirect($this->Auth->redirect());

									}

								else {

						            $this->Session->setFlash(
						                __('Rut o contraseña incorrecta'),
						                'default',
						                array(),
						                'auth'
						            );
						        }
								

								
							}
							else {
								if($this->request->data['Vet']['rol']== 'Administrador'){
									$mensaje= '<script name="accion">window.onload = function(){            
											        swal("Usted NO es un Administrador", "Ingrese a su sección correspondiente", "error")
											        }
											   </script>';	
									echo($mensaje);

								}
								else{
									$mensaje= '<script name="accion">window.onload = function(){            
											        swal("Usted NO es un Veterinario", "Ingrese a su sección correspondiente", "error")
											        }
										        </script>';	
									echo($mensaje);				
								}
							}

					    }
			}
	public function homeVet(){
					
					$this->set('title_for_layout', 'Home Veterinarios');

	}
	public function homeAdministrador(){
					
					$this->set('title_for_layout', 'Home Administrador');

	}

	public function deshabilitado(){
		$this->set('title_for_layout', 'Deshabilitado');
		$usuario = AuthComponent::user();
		$id = $usuario[0]['Vet']['ID_VET'];
		$this->loadModel('Vet');
		if (!$this->Vet->exists($id)) {
			throw new NotFoundException(__('Invalid Vet'));
		}
		$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
		$this->set('Vet', $this->Vet->find('first', $options));

	}
	public function logout() {
			    return $this->redirect($this->Auth->logout());
			}



	public function miAgenda(){

		$this->set('title_for_layout', 'Mi Agenda');
		$this->loadModel('Agenda');
		$usuario = AuthComponent::user();
		$numSol =$this->Agenda->query('CALL `SP_NUM_AGENDA`('.$usuario[0]['Vet']['ID_VET'].')');
		$this->set(compact('numSol'));
	}

	public function solicitudesHora(){
		$usuario = AuthComponent::user();
		$tienePeteciones= true;
		$this->set('title_for_layout', 'Solicitudes de Hora');
		$this->loadModel('Agenda');
		$options = array('conditions' => array('Agenda.ID_VET' => $usuario[0]['Vet']['ID_VET'], 'Agenda.ESTADO_AGENDA' => 'P'));
		$agendas =$this->Agenda->find('all',$options);
		if(count($agendas)<1) $tienePeteciones= false;

		$this->loadModel('User');
		$usuarios;
		if ($tienePeteciones)
		foreach ($agendas as $key => $agenda) {
			$options = array('conditions' => array('User.ID' => $agenda['Ma']['ID']));
			$user =$this->User->find('all',$options);
			$usuarios[$agenda['Ma']['ID_MAS']]= $user[0]['User']['name'];
		}

		$this->loadModel('BloqAgen');
		$this->loadModel('OfertaHor');
		$bloques =$this->BloqAgen->find('all');
		$horarios;

		if ($tienePeteciones)
		foreach ($bloques as $key => $bloque) {
			
				$options = array('conditions' => array('OfertaHor.ID_VET' => $usuario[0]['Vet']['ID_VET'],
				'OfertaHor.ID_OFERTA_HOR' => $bloque['BloqAgen']['ID_OFERTA_HOR']
				));
				$OfertaHors =$this->OfertaHor->find('all',$options);
				if(count($OfertaHors)>0){
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
					$OfertaHors[0]['OfertaHor']['name'] = $dia.' '.$OfertaHors[0]['Cal']['FECHA_CAL'].': '. $OfertaHors[0]['OfertaHor']['name'];
					if(!isset($horarios[$bloque['BloqAgen']['ID_AGENDA']]))
					$horarios[$bloque['BloqAgen']['ID_AGENDA']] = $OfertaHors[0]['OfertaHor']['name'];
				}
				
			
				
		}

		
		
		$this->set(compact('agendas','usuarios','horarios'));	
	  		
	}
	public function aceptar_solicitud($agenda){
			$this->loadModel('Agenda');
			$aceptada= $this->Agenda->find('all',array('conditions' => array('Agenda.ID_AGENDA' =>$agenda )));
			$this->loadModel('BloqAgen');
			$bloques= $this->BloqAgen->find('all',array('conditions' => array('BloqAgen.ID_AGENDA' =>$agenda )));
			

			$this->loadModel('User');
			$cliente = $this->User->find('all',array(
			'conditions' => array('User.ID'=> $aceptada[0]['Ma']['ID'])
			));



			$this->loadModel('OfertaHor');

			$ocupado = false;
			for ($i=0; $i <count($bloques); $i++) { 
				$oferta= $this->OfertaHor->find('all',array('conditions' => 
					array('OfertaHor.ID_OFERTA_HOR' =>$bloques[$i]['BloqAgen']['ID_OFERTA_HOR'])));
			
				if($oferta[0]['OfertaHor']['ESTADO_AGENDAMIENTO'] == 'A' OR $oferta[0]['OfertaHor']['ESTADO_AGENDAMIENTO'] == 'R'){
					$ocupado = true;

				}
			}

			if(!$ocupado){
			
				$aceptada[0]['Agenda']['ESTADO_AGENDA'] = 'A';
				if($this->Agenda->save($aceptada[0]['Agenda']))$this->Session->setFlash(__('La Hora ha sido aceptada.'));
				$this->loadModel('BloqAgen');
				$bloques= $this->BloqAgen->find('all',array('conditions' => array('BloqAgen.ID_AGENDA' =>$agenda )));
				foreach ($bloques as $key => $bloque) {
					$this->loadModel('OfertaHor');
					$oferta = $this->OfertaHor->find('all',array('conditions' => array('OfertaHor.ID_OFERTA_HOR'=>$bloque['BloqAgen']['ID_OFERTA_HOR'])));
					$oferta[0]['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'A';
					if($this->OfertaHor->save($oferta[0]['OfertaHor']))$this->Session->setFlash(__('La Oferta Horaria ha sido actualizada.'));
					$Email = new CakeEmail('gmail');
					$Email->to($cliente[0]['User']['MAIL_CLI']);
					$Email->subject('Información de Solicitud de Hora');
					$Email->send("Estimado/a ".$cliente[0]['User']['NOMBRE_CLI'].":
						Le informamos que su solicitud de hora para la atención ".$aceptada[0]['Pre']['NOMBRE_PRES']." con su
						mascota ".$aceptada[0]['Ma']['NOMBRE_MAS']." ha sido aceptada. Por favor le solicitamos puntualidad y
						que asista a nuestra clínica en la fecha estipulada.
						Clínica Aldea Animal");
				
				}
			}
			$this->set(compact('aceptada','ocupado'));
			
	}

	public function ver_solicitudes(){
		$usuario = AuthComponent::user();
		$tienePeteciones= true;
		$this->set('title_for_layout', 'Solicitudes de Hora');
		$this->loadModel('Agenda');
		$options = array('conditions' => array('Agenda.ID_VET' => $usuario[0]['Vet']['ID_VET'], 'Agenda.ESTADO_AGENDA' => 'A'));
		$agendas =$this->Agenda->find('all',$options);
	
		if(count($agendas)<1) $tienePeteciones= false;

		$this->loadModel('User');
		$usuarios;
		if ($tienePeteciones)
		foreach ($agendas as $key => $agenda) {
			$options = array('conditions' => array('User.ID' => $agenda['Ma']['ID']));
			$user =$this->User->find('all',$options);
			$usuarios[$agenda['Ma']['ID_MAS']]= $user[0]['User']['name'];
		}

		$this->loadModel('BloqAgen');
		$this->loadModel('OfertaHor');
		$bloques =$this->BloqAgen->find('all');
		$horarios;
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		if ($tienePeteciones)
		foreach ($bloques as $key => $bloque) {
			
				$options = array('conditions' => array('OfertaHor.ID_VET' => $usuario[0]['Vet']['ID_VET'],
				'OfertaHor.ID_OFERTA_HOR' => $bloque['BloqAgen']['ID_OFERTA_HOR'], 'CAL.FECHA_CAL >=' => $primerDia
				));
				$OfertaHors =$this->OfertaHor->find('all',$options);
				if(count($OfertaHors)>0){
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
					if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
				
				
			
				$OfertaHors[0]['OfertaHor']['name'] = $dia.' '.$OfertaHors[0]['Cal']['FECHA_CAL'].': '. $OfertaHors[0]['OfertaHor']['name'];
				if(!isset($horarios[$bloque['BloqAgen']['ID_AGENDA']]))
					$horarios[$bloque['BloqAgen']['ID_AGENDA']] = $OfertaHors[0]['OfertaHor']['name'];

			}
		}


		$this->set(compact('agendas','usuarios','horarios'));

	}



	public function atencion_medica($id = null){
		$this->set('title_for_layout', 'Atención Médica');
		$options = array('conditions' => array('Atencion.ID_ATENCION' => $id));
		$this->loadModel('Atencion');
		$atencion = $this->Atencion->find('all',$options);
		$this->set(compact('id','atencion'));
		

	}



	public function administracion_vet(){
		$this->set('title_for_layout', 'Administración Veterinario');

	}
	public function gestion(){
		$this->set('title_for_layout', 'Gestion Admin');

	}
	public function gestion_cliente(){
		$this->set('title_for_layout', 'Gestion Cliente');

		if ($this->request->is(array('post', 'put'))) {
			$this->loadModel('User');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El Cliente a sido guardado.'));
				return $this->redirect(array('action' => 'gestion'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}



		$this->loadModel('User');
		$users= $this->User->find('list');
		$this->set(compact('users'));

	}
	
	public function gestion_vet(){
		$this->set('title_for_layout', 'Gestion Vet');

		if ($this->request->is(array('post', 'put'))) {
			$this->loadModel('Vet');
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('El Cliente a sido guardado.'));
				return $this->redirect(array('action' => 'gestion'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}



		$this->loadModel('Vet');
		$vets= $this->Vet->find('list');
		$this->set(compact('vets'));
	}
	
	





	public function view($id = null) {
		$this->set('title_for_layout', 'Mis Datos');
		$usuario = AuthComponent::user();
		if($usuario[0]['Group']['ID_GRUPO']==3){
			return $this->redirect(array('action' => 'registro_vet'));
		}
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $usuario[0]['Vet']['ID_VET']));
		$this->set('vet', $this->Vet->find('first', $options));
	}
	public function view2($id = null) {
		$this->view = 'view';
		$this->set('title_for_layout', 'Vet Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
		$this->set('vet', $this->Vet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Ingresar Veterinario');
		if ($this->request->is('post')) {
			$this->loadModel('Vet');
			$this->Vet->create();
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinario ha sido guardado.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('Group');
		$groups = $this->Group->find('list');
		unset($groups[1]);
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Editar Mis Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			unset($this->request->data['Vet']['PASSWORD_VET']);
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('Tus datos han sido actualizados.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $usuario[0]['Vet']['ID_VET']));
			$this->request->data = $this->Vet->find('first', $options);
		}
		$groups = $this->Vet->Group->find('list');
		$this->set(compact('groups'));
	}
	public function edit2($id = null) {
		$this->view = 'edit';
		$this->set('title_for_layout', 'Editar Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			unset($this->request->data['Vet']['PASSWORD_VET']);
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos han sido actualizados.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
		
			$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
			$this->request->data = $this->Vet->find('first', $options);
		}
		$groups = $this->Vet->Group->find('list');
		$this->set(compact('groups'));
	}




	public function seleccion_cliente(){
		$this->set('title_for_layout', 'Selección Cliente');


		

		if($this->request->is('post')){

			$id = $this->request->data['cliente']['NOMBRE_CLI'];
			return $this->redirect(array(
				'controller' => 'atencions',
				'action' => 'add',
				$this->request->data['cliente']['NOMBRE_CLI']
				));
		}
		$this->loadModel('User');
		$users=$this->User->find('list',array('order' => array('User.name' => 'ASC'), 
					'conditions' => array('USER.HABILITADO_CLI <>'=> '0')));
		$this->set(compact('users'));

	}





	public function getMonthDays($Month, $Year)
		{
		   
		   if( is_callable("cal_days_in_month"))
		   {
		      return cal_days_in_month(CAL_GREGORIAN, $Month, $Year);
		   }
		   else
		   {
		      
		      return date("d",mktime(0,0,0,$Month+1,0,$Year));
		   }
		}


	public function estadisticas(){
		$this->set('title_for_layout', 'Estadísticas Anuales');
		$usuario = AuthComponent::user(); 
		$this->loadModel('TipoMa');
		$tipoMa = $this->TipoMa->find('all');
	
		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$dias= array();
		for($i=0;$i<12;$i++){

			$dias[$i] = $this->getMonthDays($i+1,$year);
		}
		$estadisticas;
		for($i=0;$i<12;$i++){
			$estadisticas[$i+1]=array();
			if($i+1<10){
				array_push($estadisticas[$i+1], $year.'-0'.($i+1).'-01');
				array_push($estadisticas[$i+1], $year.'-0'.($i+1).'-'.$dias[$i] );
			}
			else{
				array_push($estadisticas[$i+1], $year.'-'.($i+1).'-01');
				array_push($estadisticas[$i+1], $year.'-'.($i+1).'-'.$dias[$i] );
			}
		}


		$mensuales=array();
		for ($j=0; $j <12 ; $j++) { 
		
			$temp=array();
			for ($i=0; $i < count($tipoMa); $i++) { 
				$temp = $this->TipoMa->query('CALL `SP_ESTADISTICA_PATOLOGIAS`(\''.$tipoMa[$i]['TipoMa']['ID_TIPO_MAS'].'\',\''.$estadisticas[$j+1][0].'\',\''.$estadisticas[$j+1][1].'\')');
				//debug('CALL `SP_ESTADISTICA_PATOLOGIAS`(\''.$tipoMa[$i]['TipoMa']['ID_TIPO_MAS'].'\',\''.$estadisticas[$j+1][0].'\',\''.$estadisticas[$j+1][1].'\')');

				if(count($temp)!=0){
					array_push($temp,$j);

					array_push($mensuales,$temp);
				} 
				
		
			}
			
		}

		$this->set(compact('mensuales','year'));

	}


	public function cambiar_pass($id= null)
			{
				$this->set('title_for_layout', 'Cambiar Contraseña');
				$this->loadModel('Vet');
				$usuario = AuthComponent::user();	
				if($id != $usuario[0]['Vet']['ID_VET']) return $this->redirect(array('action' => 'homeVet'));
				
				if (!$this->Vet->exists($id)) {
					throw new NotFoundException(__('Invalid Vet'));
				}
				if ($this->request->is(array('post', 'put'))) {
					$data=$this->request->data;
					if($usuario[0]['Vet']['PASSWORD_VET']!=Security::hash($data['Vet']['PASSWORD_Actual'])){
						
						$this->Session->setFlash(__('La contraseña actual no es correcta.'));
						return $this->redirect(array('action' => 'cambiar_pass',$id));
					}
					if($data['Vet']['PASSWORD_NUEVO']!=$data['Vet']['password_update']){
						
						$this->Session->setFlash(__('La nueva contraseña no coincide con su confirmación.'));
						return $this->redirect(array('action' => 'cambiar_pass',$id));
					}

					$nuevaContraseña = $data['Vet']['PASSWORD_NUEVO'];
					
					$usuario[0]['Vet']['PASSWORD_VET'] = $nuevaContraseña;
					

					
					if ($this->Vet->save($usuario[0])) {
						$this->Session->setFlash(__('Sus Datos han sido actualizados.'));
						return $this->redirect(array('action' => 'view'));
					} else {
					  $this->Session->setFlash(__('The User could not be saved. Please, try again.'));
					}
				} else {
					$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
					$this->request->data = $this->Vet->find('first', $options);
				}
				$groups = $this->Vet->Group->find('list');
				$this->set(compact('groups'));
			}



			public function misDatos(){
				$this->set('title_for_layout', 'Mis Datos');
				$usuario = AuthComponent::user();
				$id = $usuario[0]['Vet']['ID_VET'];
				$this->loadModel('Vet');
				if (!$this->Vet->exists($id)) {
					throw new NotFoundException(__('Invalid Vet'));
				}

				$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
				$this->set('Vet', $this->Vet->find('first', $options));

			}

			public function cambiar_pass_admin($id=null)
			{
				$this->set('title_for_layout', 'Cambiar Contraseña');
				$this->loadModel('Vet');
				$usuario = AuthComponent::user();	
				if($id != $usuario[0]['Vet']['ID_VET']) return $this->redirect(array('action' => 'homeAdministrador'));
				
				if (!$this->Vet->exists($id)) {
					throw new NotFoundException(__('Invalid Vet'));
				}
				if ($this->request->is(array('post', 'put'))) {
					$data=$this->request->data;
					if($usuario[0]['Vet']['PASSWORD_VET']!=Security::hash($data['Vet']['PASSWORD_Actual'])){
						
						$this->Session->setFlash(__('La contraseña actual no es correcta.'));
						return $this->redirect(array('action' => 'cambiar_pass',$id));
					}
					if($data['Vet']['PASSWORD_NUEVO']!=$data['Vet']['password_update']){
						
						$this->Session->setFlash(__('La nueva contraseña no coincide con su confirmación.'));
						return $this->redirect(array('action' => 'cambiar_pass',$id));
					}

					$nuevaContraseña = $data['Vet']['PASSWORD_NUEVO'];
					
					$usuario[0]['Vet']['PASSWORD_VET'] = $nuevaContraseña;
					

					
					if ($this->Vet->save($usuario[0])) {
						
						return $this->redirect(array('action' => 'view'));
					} else {
					  $this->Session->setFlash(__('The User could not be saved. Please, try again.'));
					}
				} else {
					$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
					$this->request->data = $this->Vet->find('first', $options);
				}
				$groups = $this->Vet->Group->find('list');
				$this->set(compact('groups'));
			}


			public function atencion($value='')
			{
				$this->set('title_for_layout', 'Seleccione una Opción');
			}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
}
