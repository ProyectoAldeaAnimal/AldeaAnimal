<?php
App::uses('AppController', 'Controller');
/**
 * TipoMas Controller
 *
 * @property TipoMa $TipoMa
 * @property PaginatorComponent $Paginator
 */
class TipoMasController extends AppController {

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
		$this->TipoMa->recursive = 0;
		$this->set('tipoMas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoMa->exists($id)) {
			throw new NotFoundException(__('Invalid tipo ma'));
		}
		$options = array('conditions' => array('TipoMa.' . $this->TipoMa->primaryKey => $id));
		$this->set('tipoMa', $this->TipoMa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar Tipo de Mascota');
		if ($this->request->is('post')) {
			$this->TipoMa->create();
			if ($this->TipoMa->save($this->request->data)) {
				$this->Session->setFlash(__('El tipo de mascota ha sido guardado'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo ma could not be saved. Please, try again.'));
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
		if (!$this->TipoMa->exists($id)) {
			throw new NotFoundException(__('Invalid tipo ma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoMa->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo ma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo ma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoMa.' . $this->TipoMa->primaryKey => $id));
			$this->request->data = $this->TipoMa->find('first', $options);
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
		$this->TipoMa->id = $id;
		if (!$this->TipoMa->exists()) {
			throw new NotFoundException(__('Invalid tipo ma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoMa->delete()) {
			$this->Session->setFlash(__('The tipo ma has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo ma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
