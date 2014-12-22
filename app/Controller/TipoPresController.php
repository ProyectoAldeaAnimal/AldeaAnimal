<?php
App::uses('AppController', 'Controller');
/**
 * TipoPres Controller
 *
 * @property TipoPre $TipoPre
 * @property PaginatorComponent $Paginator
 */
class TipoPresController extends AppController {

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
		$this->set('title_for_layout', 'Tipo Prestaciones');
		$this->TipoPre->recursive = 0;
		$this->set('tipoPres', $this->Paginator->paginate());
	}	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoPre->exists($id)) {
			throw new NotFoundException(__('Invalid tipo pre'));
		}
		$options = array('conditions' => array('TipoPre.' . $this->TipoPre->primaryKey => $id));
		$this->set('tipoPre', $this->TipoPre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar Tipo Prestación');
		if ($this->request->is('post')) {
			$this->TipoPre->create();
			if ($this->TipoPre->save($this->request->data)) {
				$this->Session->setFlash(__('Realizado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo pre could not be saved. Please, try again.'));
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
		$this->set('title_for_layout', 'Editar Tipo Prestación');
		if (!$this->TipoPre->exists($id)) {
			throw new NotFoundException(__('Invalid tipo pre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoPre->save($this->request->data)) {
				$this->Session->setFlash(__('Realizado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo pre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoPre.' . $this->TipoPre->primaryKey => $id));
			$this->request->data = $this->TipoPre->find('first', $options);
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
		$this->TipoPre->id = $id;
		if (!$this->TipoPre->exists()) {
			throw new NotFoundException(__('Invalid tipo pre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoPre->delete()) {
			$this->Session->setFlash(__('Realizado con exito.'));
		} else {
			$this->Session->setFlash(__('The tipo pre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
