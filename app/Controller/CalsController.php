<?php
App::uses('AppController', 'Controller');
/**
 * Cals Controller
 *
 * @property Cal $Cal
 * @property PaginatorComponent $Paginator
 */
class CalsController extends AppController {

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
		$this->Cal->recursive = 0;
		$this->set('cals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cal->exists($id)) {
			throw new NotFoundException(__('Invalid cal'));
		}
		$options = array('conditions' => array('Cal.' . $this->Cal->primaryKey => $id));
		$this->set('cal', $this->Cal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cal->create();
			if ($this->Cal->save($this->request->data)) {
				$this->Session->setFlash(__('The cal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cal could not be saved. Please, try again.'));
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
		if (!$this->Cal->exists($id)) {
			throw new NotFoundException(__('Invalid cal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cal->save($this->request->data)) {
				$this->Session->setFlash(__('The cal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cal.' . $this->Cal->primaryKey => $id));
			$this->request->data = $this->Cal->find('first', $options);
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
		$this->Cal->id = $id;
		if (!$this->Cal->exists()) {
			throw new NotFoundException(__('Invalid cal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cal->delete()) {
			$this->Session->setFlash(__('The cal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
