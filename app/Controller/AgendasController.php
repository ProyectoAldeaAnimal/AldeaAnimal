<?php
App::uses('AppController', 'Controller');
/**
 * Agendas Controller
 *
 * @property Agenda $Agenda
 * @property PaginatorComponent $Paginator
 */
class AgendasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
<<<<<<< HEAD
	
=======

>>>>>>> 1e3571fc14bea30522d993f9280f51746840295f
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$usuario = AuthComponent::user();
		$this->Agenda->recursive = 0;
		$agendas = $this->Agenda->find('all');
		$mas = $this->Agenda->Ma->find('all', array(
		'conditions' => array('Ma.ID' => $usuario[0]['User']['ID'])
		));
		$this->loadModel('BloqAgen');

		$bloques =$this->BloqAgen->find('all');
	
		$esta = false;
		$i=0;
		foreach ($agendas as $agenda) {
			foreach ($mas as $ma) {
				if($agenda['Ma']['ID_MAS'] == $ma['Ma']['ID_MAS']) $esta = true;
			}
			if(!$esta){
			foreach ($bloques as $key =>$bloque){
			
					if($bloque['BloqAgen']['ID_AGENDA'] == $agendas[$i]['Agenda']['ID_AGENDA']){
						unset($bloques[$key]);
					}
				}
				unset($agendas[$i]);

				
			}
			$esta= false;
			$i++;
		}

		$blocks;
		foreach ($bloques as $bloque) {
			$blocks[$bloque['BloqAgen']['ID_AGENDA']]=$bloque['BloqAgen'];
		}

		$ofertaHors;
		$this->loadModel('OfertaHor');
		$this->loadModel('Cal');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$j=0;
    	if($bloques)	
		foreach ($blocks as $block) {
			$options = array('conditions' => array('OfertaHor.ID_OFERTA_HOR' => $block['ID_OFERTA_HOR']));
			$ofertaHors[$block['ID_AGENDA']]= $this->OfertaHor->find('list',$options);

			$idCal= $this->OfertaHor->find('all',array('conditions' => array('OfertaHor.ID_OFERTA_HOR' => $block['ID_OFERTA_HOR'])));
			$cals=$this->Cal->find('all', array(
			'conditions' => array('Cal.ID_CAL' => $idCal[0]['Cal']['ID_CAL']  , 'CAL.FECHA_CAL >=' => $primerDia)
			));
			$i= (int)$block['ID_AGENDA'];
			$j= (int)$block['ID_OFERTA_HOR'];
			if(count($cals)>0){
				if($cals[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
				if($cals[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
				if($cals[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
				if($cals[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
				if($cals[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
				if($cals[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
				$ofertaHor['OfertaHor']['name'] = $dia." : ".$cals[0]['Cal']['FECHA_CAL'] . " Bloque Horario:  ".$ofertaHors[$i][$j]; 
				$ofertaHors[$block['ID_AGENDA']] =$ofertaHor['OfertaHor']['name'];
			}
			else $ofertaHors=array();
			
		}
		else $this->Session->setFlash(__('Usted no tiene solicitudes de hora.'));
		
		$this->set(compact('agendas','ofertaHors'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
		$this->set('agenda', $this->Agenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add(){
		$params = $this->params['url'];
		if(count($params)==0) $this->redirect(array('controller'=>'users','action' => 'pre_solicitar_hora'));
		$usuario = AuthComponent::user();
		if ($this->request->is('post')) {
				$data =$this->request->data;
				$this->loadModel('Pres');
				$options = array('conditions' => array('Pres.ID_PRES' => $data['Agenda']['ID_PRES']));
				$prestacion = $this->Pres->find('all',$options);
				$numBloq = $prestacion[0]['Pres']['NUMERO_BLOQUES'];
				$data['Agenda']['ESTADO_AGENDA'] = 'P';
			$data2=false;
			if(isset($data['OfertaHor']['OfertaHor'])){
				$data2= $this->Agenda->save($data['Agenda']);
				}
			if ($data2) {
				$this->loadModel('BloqAgen');
				for ($i=0; $i <(int)$numBloq; $i++) { 
					$this->BloqAgen->save( 
				    array(
				        'ID_OFERTA_HOR' => $data['OfertaHor']['OfertaHor'],
				        'ID_AGENDA' => $data2['Agenda']['ID_AGENDA']
				    )
					);
					$data['OfertaHor']['OfertaHor'] = $data['OfertaHor']['OfertaHor'] +1;
				}
				
				$this->Session->setFlash(__('Su hora ha sido agendada.'));
				return $this->redirect(array(
					'controller' => 'users',
					'action' => 'misMascotas'));
			} else {
				$this->Session->setFlash(__('No se ha podido agendar su hora, por favor intente nuevamente.'));
			}
		}
		$options = array('conditions' => array('VET.ID_VET'=> $params['param']));
		$vets = $this->Agenda->Vet->find('list',$options);
		$mas = $this->Agenda->Ma->find('list', array(
    			'conditions' => array('Ma.ID' => $usuario[0]['User']['ID'])
    			));
		if(!$mas){
			$this->Session->setFlash(__('Usted no tiene mascotas inscritas en el sistema comuniquese con su veterinario.'));
			return $this->redirect(array(
					'controller' => 'users',
					'action' => 'misMascotas'));	
		}

		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		# Obtenemos el numero de la semana
		$semana=date("W",mktime(0,0,0,$month,$day,$year));

		# Obtenemos el día de la semana de la fecha dada
		$diaSemana=date("w",mktime(0,0,0,$month,$day,$year));

		# el 0 equivale al domingo...
		if($diaSemana==0)
		    $diaSemana=7;

		# A la fecha recibida, le restamos el dia de la semana y obtendremos el lunes
		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day-$diaSemana+1,$year));
		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		# A la fecha recibida, le sumamos el dia de la semana menos siete y obtendremos el domingo
		//$ultimoDia=date("d-m-Y",mktime(0,0,0,$month,$day+(7-$diaSemana),$year));

		//echo "<br>Semana: ".$semana." - año: ".$year;
		//echo "<br>Primer día ".$primerDia;
		//echo "<br>Ultimo día ".$ultimoDia;
		$this->loadModel('Pre');
		$pres = $this->Pre->find('list');
		$options = array('conditions' => array('OfertaHor.ID_VET'=> $params['param'], 'Cal.FECHA_CAL >=' =>  $primerDia, 'OfertaHor.ESTADO_AGENDAMIENTO <>'=> 'A'));
		$ofertaHoras = $this->Agenda->OfertaHor->find('all',$options);
		$ofertaHors;
		$i=0;
		foreach ($ofertaHoras as $ofertaHor):			
				$this->loadModel('Cal');
				$cals=$this->Cal->find('all', array(
    			'conditions' => array('Cal.ID_CAL' => $ofertaHor['OfertaHor']['ID_CAL'])
    			));
    			
    			$ofertaHor['OfertaHor']['name'] = $cals[0]['Cal']['NOMBRE_DIA']. " .".$ofertaHor['OfertaHor']['name'].'- Fecha:  ' . $ofertaHor['Cal']['FECHA_CAL']; 
    			$ofertaHoras[$i]['OfertaHor']['name'] = $ofertaHor['OfertaHor']['name'];
    			$ofertaHors[$ofertaHoras[$i]['OfertaHor']['ID_OFERTA_HOR']] =$ofertaHor['OfertaHor']['name'];
    			$i++;
		endforeach;
		if(!$ofertaHoras){
			$ofertaHors = 'El veterinario no tiene oferta Horaria';
			$this->Session->setFlash(__($ofertaHors));
		} 
		$this->set(compact('vets', 'mas', 'pres', 'ofertaHors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agenda->save($this->request->data)) {
				$this->Session->setFlash(__('The agenda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agenda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
			$this->request->data = $this->Agenda->find('first', $options);
		}
		$vets = $this->Agenda->Vet->find('list');
		$mas = $this->Agenda->Ma->find('list');
		$pres = $this->Agenda->Pre->find('list');
		$ofertaHors = $this->Agenda->OfertaHor->find('list');
		$this->set(compact('vets', 'mas', 'pres', 'ofertaHors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agenda->id = $id;
		if (!$this->Agenda->exists()) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agenda->delete()) {
			$this->Session->setFlash(__('La agenda ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('The agenda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function rechazar($id = null) {
		$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
		$ag=$this->Agenda->find('all',$options);
		$this->loadModel('User');
		$cliente = $this->User->find('all',array(
			'conditions' => array('User.ID'=> $ag[0]['Ma']['ID'])
			));

		if (!isset($ag)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		if($ag[0]['Agenda']['ESTADO_AGENDA']=='P') {
			$ag[0]['Agenda']['ESTADO_AGENDA']='R';
			if($this->Agenda->save($ag[0]))$this->Session->setFlash(__('Una hora ha sido rechazada.'));
			else $this->Session->setFlash(__('Ha ocurrido un problema'));
			$Email = new CakeEmail('gmail');
			$Email->to($cliente[0]['User']['MAIL_CLI']);
			$Email->subject('Información de Solicitud de Hora');
			$Email->send("Estimado/a ".$cliente[0]['User']['NOMBRE_CLI'].":
				Le informamos que su solicitud de hora para la atención ".$ag[0]['Pre']['NOMBRE_PRES']." con su
				mascota ".$ag[0]['Ma']['NOMBRE_MAS']." ha sido rechazada. Por favor solicite otra Hora.
				Atentamente
				Clínica Aldea Animal");
				
			return $this->redirect(array('controller'=>'vets','action' => 'solicitudesHora'));
		}
		else{
			$this->Session->setFlash(__('Usted no puede hacer esto.'));
			return $this->redirect(array('controller'=>'vets','action' => 'solicitudesHora'));
		}
		//if ($this->Agenda->delete()) {
		//	$this->Session->setFlash(__('La agenda ha sido eliminada.'));
		//} else {
		//	$this->Session->setFlash(__('The agenda could not be deleted. Please, try again.'));
	//	}
	//	return $this->redirect(array('action' => 'index'));
	}
}
