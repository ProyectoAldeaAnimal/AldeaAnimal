<?php
App::uses('AppController', 'Controller');
/**
 * TipoExes Controller
 *
 * @property TipoEx $TipoEx
 * @property PaginatorComponent $Paginator
 */
class TipoExesController extends AppController {

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
		$this->set('title_for_layout', 'Tipos de Examen');
		$this->TipoEx->recursive = 0;
		$this->set('tipoExes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', ' Ver Tipos de Examen');
		if (!$this->TipoEx->exists($id)) {
			throw new NotFoundException(__('Invalid tipo ex'));
		}
		$options = array('conditions' => array('TipoEx.' . $this->TipoEx->primaryKey => $id));
		$this->set('tipoEx', $this->TipoEx->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', ' Agregar Tipos de Examen');
		if ($this->request->is('post')) {
			$this->TipoEx->create();
			if ($this->TipoEx->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo ex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo ex could not be saved. Please, try again.'));
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
		$this->set('title_for_layout', ' Editar Tipos de Examen');
		if (!$this->TipoEx->exists($id)) {
			throw new NotFoundException(__('Invalid tipo ex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoEx->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo ex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo ex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoEx.' . $this->TipoEx->primaryKey => $id));
			$this->request->data = $this->TipoEx->find('first', $options);
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
		$this->TipoEx->id = $id;
		if (!$this->TipoEx->exists()) {
			throw new NotFoundException(__('Invalid tipo ex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoEx->delete()) {
			$this->Session->setFlash(__('The tipo ex has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo ex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
