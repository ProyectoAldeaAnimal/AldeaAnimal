<?php
App::uses('AppController', 'Controller');
/**
 * Clis Controller
 *
 * @property Cli $Cli
 * @property PaginatorComponent $Paginator
 */
class ClisController extends AppController {

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
		$this->Cli->recursive = 0;
		$this->set('clis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cli->exists($id)) {
			throw new NotFoundException(__('Invalid cli'));
		}
		$options = array('conditions' => array('Cli.' . $this->Cli->primaryKey => $id));
		$this->set('cli', $this->Cli->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cli->create();
			if ($this->Cli->save($this->request->data)) {
				$this->Session->setFlash(__('The cli has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cli could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Cli->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cli->exists($id)) {
			throw new NotFoundException(__('Invalid cli'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cli->save($this->request->data)) {
				$this->Session->setFlash(__('The cli has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cli could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cli.' . $this->Cli->primaryKey => $id));
			$this->request->data = $this->Cli->find('first', $options);
		}
		$groups = $this->Cli->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cli->id = $id;
		if (!$this->Cli->exists()) {
			throw new NotFoundException(__('Invalid cli'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cli->delete()) {
			$this->Session->setFlash(__('The cli has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cli could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
