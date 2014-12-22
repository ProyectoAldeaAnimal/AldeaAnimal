<?php
App::uses('AppController', 'Controller');
/**
 * TipoPrestacions Controller
 *
 * @property TipoPrestacion $TipoPrestacion
 * @property PaginatorComponent $Paginator
 */
class TipoPrestacionsController extends AppController {

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
		$this->TipoPrestacion->recursive = 0;
		$this->set('tipoPrestacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoPrestacion->exists($id)) {
			throw new NotFoundException(__('Invalid tipo prestacion'));
		}
		$options = array('conditions' => array('TipoPrestacion.' . $this->TipoPrestacion->primaryKey => $id));
		$this->set('tipoPrestacion', $this->TipoPrestacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoPrestacion->create();
			if ($this->TipoPrestacion->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo prestacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo prestacion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TipoPrestacion->exists($id)) {
			throw new NotFoundException(__('Invalid tipo prestacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoPrestacion->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo prestacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo prestacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoPrestacion.' . $this->TipoPrestacion->primaryKey => $id));
			$this->request->data = $this->TipoPrestacion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TipoPrestacion->id = $id;
		if (!$this->TipoPrestacion->exists()) {
			throw new NotFoundException(__('Invalid tipo prestacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoPrestacion->delete()) {
			$this->Session->setFlash(__('The tipo prestacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo prestacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
