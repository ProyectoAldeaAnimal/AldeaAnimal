<?php
App::uses('AppController', 'Controller');
/**
 * Mas Controller
 *
 * @property Ma $Ma
 * @property PaginatorComponent $Paginator
 */
class MasController extends AppController {

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
		$this->Ma->recursive = 0;
		$this->set('mas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver Ficha');
		if (!$this->Ma->exists($id)) {
			throw new NotFoundException(__('Invalid ma'));
		}
		$options = array('conditions' => array('Ma.' . $this->Ma->primaryKey => $id));
		$ma= $this->Ma->find('first', $options);
		$this->loadModel('Ficha');
		$options = array('conditions' => array('Ficha.' . $this->Ficha->primaryKey => $id));
		$ficha= $this->Ficha->find('first', $options);
		$this->set(compact('ma','ficha'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar Mascota');
		if ($this->request->is('post')) {
			$this->Ma->create();
			if ($this->Ma->save($this->request->data)) {
				$this->Session->setFlash(__('La mascota ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ma could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ma->User->find('list');
		$tipoMas = $this->Ma->TipoMa->find('list');
		$this->set(compact('users', 'tipoMas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ma->exists($id)) {
			throw new NotFoundException(__('Invalid ma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ma->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos de la mascota han sido actualizados.'));
				return $this->redirect(array('controller' => 'users', 'action' => 'misMascotas'));
			} else {
				$this->Session->setFlash(__('Error en los campos, reviselos nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Ma.' . $this->Ma->primaryKey => $id));
			$this->request->data = $this->Ma->find('first', $options);
		}
		$users = $this->Ma->User->find('list');
		$tipoMas = $this->Ma->TipoMa->find('list');
		$this->loadModel('Ficha');
		$options = array('conditions' => array('FICHA.'. $this->Ma->primaryKey => $id));
		$ficha = $this->Ficha->find('all',$options);
		$this->set(compact('users', 'tipoMas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ma->id = $id;
		if (!$this->Ma->exists()) {
			throw new NotFoundException(__('Invalid ma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ma->delete()) {
			$this->Session->setFlash(__('The ma has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
