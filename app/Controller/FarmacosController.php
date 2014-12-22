<?php
App::uses('AppController', 'Controller');
/**
 * Farmacos Controller
 *
 * @property Farmaco $Farmaco
 * @property PaginatorComponent $Paginator
 */
class FarmacosController extends AppController {

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
		$this->Farmaco->recursive = 0;
		$this->set('farmacos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Farmaco->exists($id)) {
			throw new NotFoundException(__('Invalid farmaco'));
		}
		$options = array('conditions' => array('Farmaco.' . $this->Farmaco->primaryKey => $id));
		$this->set('farmaco', $this->Farmaco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Farmaco->create();
			if ($this->Farmaco->save($this->request->data)) {
				$this->Session->setFlash(__('El fármaco ha sido agregado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The farmaco could not be saved. Please, try again.'));
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
		if (!$this->Farmaco->exists($id)) {
			throw new NotFoundException(__('Invalid farmaco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Farmaco->save($this->request->data)) {
				$this->Session->setFlash(__('The farmaco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The farmaco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Farmaco.' . $this->Farmaco->primaryKey => $id));
			$this->request->data = $this->Farmaco->find('first', $options);
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
		$this->Farmaco->id = $id;
		if (!$this->Farmaco->exists()) {
			throw new NotFoundException(__('Invalid farmaco'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Farmaco->delete()) {
			$this->Session->setFlash(__('The farmaco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The farmaco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
