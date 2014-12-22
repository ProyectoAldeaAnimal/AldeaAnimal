<?php
App::uses('AppController', 'Controller');
/**
 * Recmeds Controller
 *
 * @property Recmed $Recmed
 * @property PaginatorComponent $Paginator
 */
class RecmedsController extends AppController {

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
		$this->set('title_for_layout', 'Recetas o Medicación');
		$this->loadModel('RecMed');
		$this->RecMed->recursive = 0;
		$recMeds = $this->Paginator->paginate('RecMed');
		$this->set(compact('recMeds'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recmed->exists($id)) {
			throw new NotFoundException(__('Invalid recmed'));
		}

		$options = array('conditions' => array('Recmed.' . $this->Recmed->primaryKey => $id));
		$recmed=$this->Recmed->find('first', $options);
		$this->loadModel('FarRec');
		$options = array('conditions' => array('FarRec.' . $this->Recmed->primaryKey => $id));
		$posologias=$this->FarRec->find('all', $options);
		$this->set(compact('recmed','posologias'));
	}


	public function view2($id = null) {
		if (!$this->Recmed->exists($id)) {
			throw new NotFoundException(__('Invalid recmed'));
		}

		$options = array('conditions' => array('Recmed.' . $this->Recmed->primaryKey => $id));
		$recmed=$this->Recmed->find('first', $options);
		$this->loadModel('FarRec');
		$options = array('conditions' => array('FarRec.' . $this->Recmed->primaryKey => $id));
		$posologias=$this->FarRec->find('all', $options);
		$this->set(compact('recmed','posologias'));
	}

/**
 * add method
 *
 * @return void
 */
	public function recetas_mas(){
		$this->set('title_for_layout', 'Recetas');
		$usuario = AuthComponent::user();
		$this->loadModel('Ma');
		$options = array('conditions' => array('Ma.ID' => $usuario[0]['User']['ID']));
		$mas= $this->Ma->find('all',$options);
		
		$this->loadModel('RecMed');
		$this->RecMed->recursive = 0;
		$recMed = $this->Paginator->paginate('RecMed');
		$recMeds;
		for ($j=0; $j <count($recMed) ; $j++) { 
			for ($i=0; $i <count($mas) ; $i++) { 
				if($recMed[$j]['Atencion']['ID_MAS']== $mas[$i]['Ma']['ID_MAS']){
					$recMeds[$j]= $recMed[$j];
				}
			}
		}
		
		$this->set(compact('recMeds'));

	}

	
	public function select_meds(){
		$data = $this->request->data;
		if($this->request->is('post'))return $this->redirect(array('controller'=>'recmeds','action' => 'add', '?'=> array('param'=>$data['NumMeds']['NUMERO']),$data));
	}


	public function add() {
		$this->set('title_for_layout', 'Receta o Medicación');
		$params = $this->params['url'];
		if(count($params)==0) return $this->redirect(array('action' => 'select_meds'));

		if ($this->request->is('post')) {
			$repetido = false;
			$rdata=$this->request->data;
			for ($i=0; $i < $params['param'] ; $i++) {
				$actual =  $rdata['RecMed']['Farmaco '.$i];
				for ($j=0; $j < $params['param']; $j++) { 
					if($actual == $rdata['RecMed']['Farmaco '.$j] && $i!=$j){
						$repetido = true;
						break;
					}
				}

			}
			if($repetido){
				$this->Session->setFlash(__('No pueden haber medicamentos repetidos en la receta.'));
				return $this->redirect(array('action' => 'select_meds'));
			}




			$data = $this->request->data;
			$receta['ID_ATENCION'] = $data['RecMed']['ID_ATENCION'];
			$receta['TIPO'] = $data['RecMed']['TIPO'];
			$receta['OBS_RECETA'] = $data['RecMed']['OBS_RECETA'];
		

			$medicamentos;
			for ($i=0; $i < $params['param']; $i++) { 
				$medicamentos[$i]['ID_FAR'] = $data['RecMed']['Farmaco '.$i];
				$medicamentos[$i]['ID_RECETA'] = '0';
				$medicamentos[$i]['POSOLOGIA'] = $data['RecMed']['Posologia '.$i];
			}
		
			$this->Recmed->create();

			if ($recTemp = $this->Recmed->save($receta)) {
				$this->loadModel('FarRec');
				for ($i=0; $i < count($medicamentos); $i++) {
					$this->FarRec->create();
					$medicamentos[$i]['ID_ATENCION'] = $recTemp['Recmed']['ID_ATENCION']; 
					$medicamentos[$i]['ID_RECETA'] = $recTemp['Recmed']['ID_RECETA'];
					if (!$this->FarRec->save($medicamentos[$i])) {
						$this->Session->setFlash(__('Ha ocurrido un error ingresando los medicamentos'));
					}
				}	
				
				$this->Session->setFlash(__('La receta ha sido creada.'));
				

				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			} else {
				$this->Session->setFlash(__('The recmed could not be saved. Please, try again.'));
			}
		}
		date_default_timezone_set('America/Santiago');
		$year= date('Y', time());
		$month= date('m', time());
		$day= date('d', time());
		

		$primerDia=date("Y-m-d",mktime(0,0,0,$month,$day,$year));
		$options = array('conditions' => array('Atencion.FECHA_ATENCION >=' => $primerDia));
		$atencions = $this->Recmed->Atencion->find('list',$options);
		$farmacos = $this->Recmed->Farmaco->find('list');
		$this->set(compact('atencions', 'farmacos','params'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recmed->exists($id)) {
			throw new NotFoundException(__('Invalid recmed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Recmed->save($this->request->data)) {
				$this->Session->setFlash(__('The recmed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recmed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recmed.' . $this->Recmed->primaryKey => $id));
			$this->request->data = $this->Recmed->find('first', $options);
		}
		$atencions = $this->Recmed->Atencion->find('list');
		$farmacos = $this->Recmed->Farmaco->find('list');
		$this->set(compact('atencions', 'farmacos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recmed->id = $id;
		if (!$this->Recmed->exists()) {
			throw new NotFoundException(__('Invalid recmed'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Recmed->delete()) {
			$this->Session->setFlash(__('The recmed has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recmed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
