<?php
App::uses('AppController', 'Controller');
/**
 * Pats Controller
 *
 * @property Pat $Pat
 * @property PaginatorComponent $Paginator
 */
class PatsController extends AppController {

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
		$this->set('title_for_layout', 'Patologías');
		$this->Pat->recursive = 0;
		$this->set('pats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver Patología');
		if (!$this->Pat->exists($id)) {
			throw new NotFoundException(__('Invalid pat'));
		}
		$options = array('conditions' => array('Pat.' . $this->Pat->primaryKey => $id));
		$this->set('pat', $this->Pat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pat->create();
			if ($this->Pat->save($this->request->data)) {
				$this->Session->setFlash(__('The pat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pat could not be saved. Please, try again.'));
			}
		}
		$farmacos = $this->Pat->Farmaco->find('list');
		$atencions = $this->Pat->Atencion->find('list');
		$tipoMas = $this->Pat->TipoMa->find('list');
		$this->set(compact('farmacos', 'atencions', 'tipoMas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Editar Patología');
		if (!$this->Pat->exists($id)) {
			throw new NotFoundException(__('Invalid pat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pat->save($this->request->data)) {
				$this->Session->setFlash(__('The pat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pat.' . $this->Pat->primaryKey => $id));
			$this->request->data = $this->Pat->find('first', $options);
		}
		$farmacos = $this->Pat->Farmaco->find('list');
		$atencions = $this->Pat->Atencion->find('list');
		$tipoMas = $this->Pat->TipoMa->find('list');
		$this->set(compact('farmacos', 'atencions', 'tipoMas'));
	}

}
