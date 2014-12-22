<?php
App::uses('AppController', 'Controller');
/**
 * Pres Controller
 *
 * @property Pre $Pre
 * @property PaginatorComponent $Paginator
 */
class PresController extends AppController {

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
		$this->set('title_for_layout', 'Prestaciones');
		$this->Pre->recursive = 0;
		$this->set('pres', $this->Paginator->paginate());
	}

	public function catalogo() {
		$this->set('title_for_layout', 'Prestaciones');
		$this->Pre->recursive = 0;
		$this->set('pres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver Prestación');
		if (!$this->Pre->exists($id)) {
			throw new NotFoundException(__('Invalid pre'));
		}
		$options = array('conditions' => array('Pre.' . $this->Pre->primaryKey => $id));
		$this->set('pre', $this->Pre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar Prestación');
		if ($this->request->is('post')) {
			$this->Pre->create();
			if ($this->Pre->save($this->request->data)) {
	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pre could not be saved. Please, try again.'));
			}
		}
		$tipoPres = $this->Pre->TipoPre->find('list');
		$this->set(compact('tipoPres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Editar Prestación');
		if (!$this->Pre->exists($id)) {
			throw new NotFoundException(__('Invalid pre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pre->save($this->request->data)) {
	
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pre.' . $this->Pre->primaryKey => $id));
			$this->request->data = $this->Pre->find('first', $options);
		}
		$tipoPres = $this->Pre->TipoPre->find('list');
		$this->set(compact('tipoPres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pre->id = $id;
		if (!$this->Pre->exists()) {
			throw new NotFoundException(__('Invalid pre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pre->delete()) {
			$this->Session->setFlash(__('The pre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
