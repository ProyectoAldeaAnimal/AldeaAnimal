<?php
App::uses('AppController', 'Controller');
/**
 * Atencions Controller
 *
 * @property Atencion $Atencion
 * @property PaginatorComponent $Paginator
 */
class AtencionsController extends AppController {

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
		$this->set('title_for_layout', 'Lista De Atenciones');
		$this->Atencion->recursive = 0;
		$this->set('atencions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout', 'Ver Atención');
		if (!$this->Atencion->exists($id)) {
			throw new NotFoundException(__('Invalid atencion'));
		}
		$options = array('conditions' => array('Atencion.' . $this->Atencion->primaryKey => $id));
		$this->set('atencion', $this->Atencion->find('first', $options));
	}


	public function view2($id = null) {
		$this->set('title_for_layout', 'Ver Atención');
		if (!$this->Atencion->exists($id)) {
			throw new NotFoundException(__('Invalid atencion'));
		}
		$options = array('conditions' => array('Atencion.' . $this->Atencion->primaryKey => $id));
		$this->set('atencion', $this->Atencion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->set('title_for_layout', 'Generar Atención');

		$usuario = AuthComponent::user();

		date_default_timezone_set('America/Santiago');

		if ($this->request->is('post')) {
			$data= $this->request->data;	
			$this->Atencion->create();
			if ($datos= $this->Atencion->save($data)) {
				$this->Session->setFlash(__('Se ha generado la atención'));
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica', '?'=> array('param'=>$datos['Atencion']['ID_ATENCION']),$datos));
			} else {
				$this->Session->setFlash(__('La atención no ha podido ser generada.'));
			}
		}
		$pres = $this->Atencion->Pre->find('list');
		//$tipoPres = $this->Atencion->TipoPre->find('list');
		$options = array('conditions' => array('Ma.ID'	=> $id));
		$mas = $this->Atencion->Ma->find('list',$options);
		if(count($mas)<1){

			$this->Session->setFlash(__('El cliente no tiene mascotas registradas'));
			return $this->redirect(array('controller'=>'vets','action' => 'seleccion_cliente'));
		} 
		//debug($tipoPres);
		$options = array('conditions' => array('Vet.ID_VET'	=> $usuario[0]['Vet']['ID_VET']));
		$vets = $this->Atencion->Vet->find('list', $options);
		$pats = $this->Atencion->Pat->find('list');
		$this->set(compact('pres', 'mas', 'pats','vets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Atencion->exists($id)) {
			throw new NotFoundException(__('Invalid atencion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atencion->save($this->request->data)) {
				$this->Session->setFlash(__('The atencion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atencion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Atencion.' . $this->Atencion->primaryKey => $id));
			$this->request->data = $this->Atencion->find('first', $options);
		}
		$pres = $this->Atencion->Pre->find('list');
		$tipoPres = $this->Atencion->TipoPre->find('list');
		$mas = $this->Atencion->Ma->find('list');
		$pats = $this->Atencion->Pat->find('list');
		$this->set(compact('pres', 'tipoPres', 'mas', 'pats'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Atencion->id = $id;
		if (!$this->Atencion->exists()) {
			throw new NotFoundException(__('Invalid atencion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Atencion->delete()) {
			$this->Session->setFlash(__('The atencion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The atencion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
