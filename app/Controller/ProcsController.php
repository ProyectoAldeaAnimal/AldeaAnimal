<?php
App::uses('AppController', 'Controller');
/**
 * Procs Controller
 *
 * @property Proc $Proc
 * @property PaginatorComponent $Paginator
 */
class ProcsController extends AppController {

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
		$this->set('title_for_layout', 'Procedimientos');
		$this->Proc->recursive = 0;
		$usuario = AuthComponent::user();
		$this->loadModel('Ma');
		$options = array('conditions' => array('Ma.ID'  => $usuario[0]['User']['ID']));
		$mas = $this->Ma->find('all',$options);
		$this->set(compact('mas'));
		$this->set('procs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver Procedimiento');
		if (!$this->Proc->exists($id)) {
			throw new NotFoundException(__('Invalid proc'));
		}
		$options = array('conditions' => array('Proc.' . $this->Proc->primaryKey => $id));
		$this->set('proc', $this->Proc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Crear Procedimiento');

		if ($this->request->is('post')) {
			$rdata = $this->request->data;
			$options = array('conditions' => array('Proc.ID_ATENCION' => $rdata['Proc']['ID_ATENCION']));
			$procs =$this->Proc->find('list',$options);
			if(count($procs)>0){
				$this->Session->setFlash(__('Ya se ha generado un procedimiento para esta atención.'));
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			}
			$this->Proc->create();
			if ($this->Proc->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha creado el nuevo procedimiento.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proc could not be saved. Please, try again.'));
			}
		}
		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		

		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$options = array('conditions' => array('Atencion.FECHA_ATENCION >=' => $primerDia));
		$atencions = $this->Proc->Atencion->find('list',$options);
		$this->set(compact('atencions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proc->exists($id)) {
			throw new NotFoundException(__('Invalid proc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proc->save($this->request->data)) {
				$this->Session->setFlash(__('The proc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proc.' . $this->Proc->primaryKey => $id));
			$this->request->data = $this->Proc->find('first', $options);
		}
		$atencions = $this->Proc->Atencion->find('list');
		$this->set(compact('atencions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proc->id = $id;
		if (!$this->Proc->exists()) {
			throw new NotFoundException(__('Invalid proc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proc->delete()) {
			$this->Session->setFlash(__('The proc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
