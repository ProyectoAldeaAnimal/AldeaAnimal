<?php
App::uses('AppController', 'Controller');
/**
 * OrdenExes Controller
 *
 * @property OrdenEx $OrdenEx
 * @property PaginatorComponent $Paginator
 */
class OrdenExesController extends AppController {

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
		$this->OrdenEx->recursive = 0;
		$this->set('ordenExes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenEx->exists($id)) {
			throw new NotFoundException(__('Invalid orden ex'));
		}
		$options = array('conditions' => array('OrdenEx.' . $this->OrdenEx->primaryKey => $id));
		$this->set('ordenEx', $this->OrdenEx->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Generar Orden Examen');
		if ($this->request->is('post')) {
			$this->OrdenEx->create();
			if ($this->OrdenEx->save($this->request->data)) {
				
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			} else {
				$this->Session->setFlash(__('The orden ex could not be saved. Please, try again.'));
			}
		}
		$tipoExes = $this->OrdenEx->TipoEx->find('list');

		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		

		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$options = array('conditions' => array('Atencion.FECHA_ATENCION >=' => $primerDia));
		$atencions = $this->OrdenEx->Atencion->find('list',$options);
		$this->set(compact('tipoExes', 'atencions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrdenEx->exists($id)) {
			throw new NotFoundException(__('Invalid orden ex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrdenEx->save($this->request->data)) {
				$this->Session->setFlash(__('The orden ex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden ex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenEx.' . $this->OrdenEx->primaryKey => $id));
			$this->request->data = $this->OrdenEx->find('first', $options);
		}
		$tipoExes = $this->OrdenEx->TipoEx->find('list');
		$atencions = $this->OrdenEx->Atencion->find('list');
		$this->set(compact('tipoExes', 'atencions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OrdenEx->id = $id;
		if (!$this->OrdenEx->exists()) {
			throw new NotFoundException(__('Invalid orden ex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OrdenEx->delete()) {
			$this->Session->setFlash(__('The orden ex has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orden ex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
