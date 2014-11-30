<?php
App::uses('AppController', 'Controller');
/**
 * OrdenHosps Controller
 *
 * @property OrdenHosp $OrdenHosp
 * @property PaginatorComponent $Paginator
 */
class OrdenHospsController extends AppController {

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
		$this->OrdenHosp->recursive = 0;
		$this->set('ordenHosps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdenHosp->exists($id)) {
			throw new NotFoundException(__('Invalid orden hosp'));
		}
		$options = array('conditions' => array('OrdenHosp.' . $this->OrdenHosp->primaryKey => $id));
		$this->set('ordenHosp', $this->OrdenHosp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrdenHosp->create();
			if ($this->OrdenHosp->save($this->request->data)) {
				$this->Session->setFlash(__('The orden hosp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden hosp could not be saved. Please, try again.'));
			}
		}
		$atencions = $this->OrdenHosp->Atencion->find('list');
		$this->set(compact('atencions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrdenHosp->exists($id)) {
			throw new NotFoundException(__('Invalid orden hosp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrdenHosp->save($this->request->data)) {
				$this->Session->setFlash(__('The orden hosp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orden hosp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdenHosp.' . $this->OrdenHosp->primaryKey => $id));
			$this->request->data = $this->OrdenHosp->find('first', $options);
		}
		$atencions = $this->OrdenHosp->Atencion->find('list');
		$this->set(compact('atencions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OrdenHosp->id = $id;
		if (!$this->OrdenHosp->exists()) {
			throw new NotFoundException(__('Invalid orden hosp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OrdenHosp->delete()) {
			$this->Session->setFlash(__('The orden hosp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orden hosp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
