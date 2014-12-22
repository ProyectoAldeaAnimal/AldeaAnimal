<?php
App::uses('AppController', 'Controller');
/**
 * OrdenInts Controller
 *
 * @property OrdenInt $OrdenInt
 * @property PaginatorComponent $Paginator
 */
class OrdenIntsController extends AppController {

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
		$this->OrdenInt->recursive = 0;
		$this->set('ordenInts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenInt->exists($id)) {
			throw new NotFoundException(__('Invalid orden int'));
		}
		$options = array('conditions' => array('OrdenInt.' . $this->OrdenInt->primaryKey => $id));
		$this->set('ordenInt', $this->OrdenInt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Generar Orden Intervención');
		if ($this->request->is('post')) {
			$this->OrdenInt->create();
			if ($this->OrdenInt->save($this->request->data)) {
				
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			} else {
				$this->Session->setFlash(__('The orden int could not be saved. Please, try again.'));
			}
		}
		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		

		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$options = array('conditions' => array('Atencion.FECHA_ATENCION >=' => $primerDia));
		$atencions = $this->OrdenInt->Atencion->find('list',$options);
		$tipoDeInts = $this->OrdenInt->TipoDeInt->find('list');
		$this->set(compact('atencions', 'tipoDeInts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrdenInt->exists($id)) {
			throw new NotFoundException(__('Invalid orden int'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrdenInt->save($this->request->data)) {
				$this->Session->setFlash(__('The orden int has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden int could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenInt.' . $this->OrdenInt->primaryKey => $id));
			$this->request->data = $this->OrdenInt->find('first', $options);
		}
		$atencions = $this->OrdenInt->Atencion->find('list');
		$tipoDeInts = $this->OrdenInt->TipoDeInt->find('list');
		$this->set(compact('atencions', 'tipoDeInts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OrdenInt->id = $id;
		if (!$this->OrdenInt->exists()) {
			throw new NotFoundException(__('Invalid orden int'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OrdenInt->delete()) {
			$this->Session->setFlash(__('The orden int has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orden int could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
