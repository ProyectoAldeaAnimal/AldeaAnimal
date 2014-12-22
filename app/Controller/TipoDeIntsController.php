<?php
App::uses('AppController', 'Controller');
/**
 * TipoDeInts Controller
 *
 * @property TipoDeInt $TipoDeInt
 * @property PaginatorComponent $Paginator
 */
class TipoDeIntsController extends AppController {

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
		$this->set('title_for_layout', 'Intervenciones');
		$this->TipoDeInt->recursive = 0;
		$this->set('tipoDeInts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver');
		if (!$this->TipoDeInt->exists($id)) {
			throw new NotFoundException(__('Invalid tipo de int'));
		}
		$options = array('conditions' => array('TipoDeInt.' . $this->TipoDeInt->primaryKey => $id));
		$this->set('tipoDeInt', $this->TipoDeInt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar');
		if ($this->request->is('post')) {
			$this->TipoDeInt->create();
			if ($this->TipoDeInt->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo de int has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo de int could not be saved. Please, try again.'));
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
		$this->set('title_for_layout', 'Editar');
		if (!$this->TipoDeInt->exists($id)) {
			throw new NotFoundException(__('Invalid tipo de int'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoDeInt->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo de int has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo de int could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoDeInt.' . $this->TipoDeInt->primaryKey => $id));
			$this->request->data = $this->TipoDeInt->find('first', $options);
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
		$this->TipoDeInt->id = $id;
		if (!$this->TipoDeInt->exists()) {
			throw new NotFoundException(__('Invalid tipo de int'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoDeInt->delete()) {
			$this->Session->setFlash(__('The tipo de int has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo de int could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
