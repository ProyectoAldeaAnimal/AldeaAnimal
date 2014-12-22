<?php
App::uses('AppController', 'Controller');
/**
 * Inters Controller
 *
 * @property Inter $Inter
 * @property PaginatorComponent $Paginator
 */
class IntersController extends AppController {

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
		$this->Inter->recursive = 0;
		$this->set('inters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inter->exists($id)) {
			throw new NotFoundException(__('Invalid inter'));
		}
		$options = array('conditions' => array('Inter.' . $this->Inter->primaryKey => $id));
		$this->set('inter', $this->Inter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Generar Intervención');
		
		if ($this->request->is('post')) {
			$rdata = $this->request->data;
			$options = array('conditions' => array('Inter.ID_ORDEN_INT' => $rdata['Inter']['ID_ORDEN_INT']));
			$ints =$this->Inter->find('list',$options);
			if(count($ints)>0){
				$this->Session->setFlash(__('Ya se ha generado una Intervención para esta orden.'));
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			}
			$this->Inter->create();
			if ($this->Inter->save($this->request->data)) {
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			} else {
				$this->Session->setFlash(__('The inter could not be saved. Please, try again.'));
			}
		}
		$vets = $this->Inter->Vet->find('list');

		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		

		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$options = array('conditions' => array('OrdenInt.FECHA_ORDEN_INT >=' => $primerDia));
		$ordenInts = $this->Inter->OrdenInt->find('list',$options);
		if(count($ordenInts)==0){
			$this->Session->setFlash(__('Debe tener alguna orden de intervención para realizar esto.'));
			return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
		}
		$this->set(compact('vets', 'ordenInts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Inter->exists($id)) {
			throw new NotFoundException(__('Invalid inter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inter->save($this->request->data)) {
				$this->Session->setFlash(__('The inter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inter.' . $this->Inter->primaryKey => $id));
			$this->request->data = $this->Inter->find('first', $options);
		}
		$vets = $this->Inter->Vet->find('list');
		$ordenInts = $this->Inter->OrdenInt->find('list');
		$this->set(compact('vets', 'ordenInts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Inter->id = $id;
		if (!$this->Inter->exists()) {
			throw new NotFoundException(__('Invalid inter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inter->delete()) {
			$this->Session->setFlash(__('The inter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
