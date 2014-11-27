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
		
    		
		foreach ($blocks as $block) {
			$options = array('conditions' => array('OfertaHor.ID_OFERTA_HOR' => $block['ID_OFERTA_HOR']));
			$ofertaHors[$block['ID_AGENDA']]= $this->OfertaHor->find('list',$options);

			$idCal= $this->OfertaHor->find('all',array('conditions' => array('OfertaHor.ID_OFERTA_HOR' => $block['ID_OFERTA_HOR'])));
			$cals=$this->Cal->find('all', array(
			'conditions' => array('Cal.ID_CAL' => $idCal[0]['Cal']['ID_CAL'])
			));
			$i= (int)$block['ID_AGENDA'];
			$j= (int)$block['ID_OFERTA_HOR'];

			if($cals[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
			if($cals[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
			if($cals[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
			if($cals[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
			if($cals[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
			if($cals[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
		
			$ofertaHor['OfertaHor']['name'] = $dia." : ".$cals[0]['Cal']['FECHA_CAL'] . " Bloque Horario:  ".$ofertaHors[$i][$j]; 
			$ofertaHors[$block['ID_AGENDA']] =$ofertaHor['OfertaHor']['name'];
		}
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
		$usuario = AuthComponent::user();
		if ($this->request->is('post')) {
				$data =$this->request->data;
				$data['Agenda']['ESTADO_AGENDA'] = 'P';
			$data2=false;
			if(isset($data['OfertaHor']['OfertaHor'][0])){
				$data2= $this->Agenda->save($data['Agenda']);
				}
			if ($data2) {
				$this->loadModel('BloqAgen');
				$this->BloqAgen->save( 
				    array(
				        'ID_OFERTA_HOR' => $data['OfertaHor']['OfertaHor'][0],
				        'ID_AGENDA' => $data2['Agenda']['ID_AGENDA']
				    )
				);
				$this->Session->setFlash(__('Su hora ha sido agendada.'));
				return $this->redirect(array(
					'controller' => 'users',
					'action' => 'misMascotas'));
			} else {
				$this->Session->setFlash(__('The agenda could not be saved. Please, try again.'));
			}
		}
		$vets = $this->Agenda->Vet->find('list');
		$mas = $this->Agenda->Ma->find('list', array(
    			'conditions' => array('Ma.ID' => $usuario[0]['User']['ID'])
    			));
		if(!$mas){
			$this->Session->setFlash(__('Usted no tiene mascotas inscritas en el sistema comuniquese con su veterinario.'));
			return $this->redirect(array(
					'controller' => 'users',
					'action' => 'misMascotas'));	
		}
		$pres = $this->Agenda->Pre->find('list');
		$ofertaHoras = $this->Agenda->OfertaHor->find('all');
		$ofertaHors;
		$i=0;
		foreach ($ofertaHoras as $ofertaHor):			
				$this->loadModel('Cal');
				$cals=$this->Cal->find('all', array(
    			'conditions' => array('Cal.ID_CAL' => $ofertaHor['OfertaHor']['ID_CAL'])
    			));
    			$ofertaHor['OfertaHor']['name'] = $cals[0]['Cal']['NOMBRE_DIA']. " .".$ofertaHor['OfertaHor']['name']; 
    			$ofertaHoras[$i]['OfertaHor']['name'] = $ofertaHor['OfertaHor']['name'];
    			$ofertaHors[$ofertaHoras[$i]['OfertaHor']['ID_OFERTA_HOR']] =$ofertaHor['OfertaHor']['name'];
    			$i++;
		endforeach;
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
			$this->Session->setFlash(__('The agenda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agenda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
