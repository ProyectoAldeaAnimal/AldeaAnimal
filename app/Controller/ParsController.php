<?php
App::uses('AppController', 'Controller');
/**
 * Pars Controller
 *
 * @property Par $Par
 * @property PaginatorComponent $Paginator
 */
class ParsController extends AppController {

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
		$this->set('title_for_layout', 'Parámetros del Sistema');
		$this->Par->recursive = 0;
		$this->set('pars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Par->exists($id)) {
			throw new NotFoundException(__('Invalid par'));
		}
		$options = array('conditions' => array('Par.' . $this->Par->primaryKey => $id));
		$this->set('par', $this->Par->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Agregar Parámetro');
		if ($this->request->is('post')) {
			$temp= $this->request->data;
			if($temp['Par']['TAM_BLOQUE']%5!=0):
			 	$this->Session->setFlash(__('El bloque horario debe ser un múltiplo de 5'));
			 	return $this->redirect(array('action' => 'add'));
			endif;

			$numHorasSem = 60* $temp['Par']['IN_SEMANA']['hour'];
			$numMinSem = $numHorasSem  + $temp['Par']['IN_SEMANA']['min'];
			$finNumHorasSem = 60* $temp['Par']['FIN_SEMANA']['hour'];
			$finNumMinSem = $finNumHorasSem  + $temp['Par']['FIN_SEMANA']['min'];
			$totalHoraSemana = $finNumMinSem - $numMinSem;
			$varSem = false;

			if($totalHoraSemana<=0):
				$this->Session->setFlash(__('El bloque final no puede ser superior al bloque'));
			 	return $this->redirect(array('action' => 'add'));
			endif;
			if($totalHoraSemana%$temp['Par']['TAM_BLOQUE']!=0) $varSem = true;


			$numHorasSab = 60* $temp['Par']['IN_SAB']['hour'];
			$numMinSab = $numHorasSab  + $temp['Par']['IN_SAB']['min'];
			$finNumHorasSab = 60* $temp['Par']['FIN_SAB']['hour'];
			$finNumMinSab = $finNumHorasSab  + $temp['Par']['FIN_SAB']['min'];
			$totalHoraSab = $finNumMinSab - $numMinSab;
			$varSab = false;
			if($totalHoraSab<=0):
				$this->Session->setFlash(__('El bloque final no puede ser superior al bloque'));
			 	return $this->redirect(array('action' => 'add'));
			endif;
			if($totalHoraSab%$temp['Par']['TAM_BLOQUE']!=0) $varSab = true;

			if($varSem and $varSab):
				$varSem = 'Semana';
				$varSab = 'Sábado';
				$this->Session->setFlash(__('No es posible aplicar ese bloque horario indicado para el horario de '.$varSem.' - '.$varSab .' que indicó. El total de horas no es divisible por el bloque.'));
				return $this->redirect(array('action' => 'add'));
			elseif($varSem):
				$varSem = 'Semana';
				$this->Session->setFlash(__('No es posible aplicar ese bloque horario indicado para el horario de '.$varSem.' que indicó. El total de horas no es divisible por el bloque.'));
				return $this->redirect(array('action' => 'add'));
			elseif($varSab):
				$varSab = 'Sábado';
				$this->Session->setFlash(__('No es posible aplicar ese bloque horario indicado para el horario de '.$varSab.' que indicó. El total de horas no es divisible por el bloque.'));	
				return $this->redirect(array('action' => 'add'));
			endif;


			$this->Par->create();
			if ($this->Par->save($this->request->data)) {
				$this->Session->setFlash(__('The par has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par could not be saved. Please, try again.'));
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
		$this->set('title_for_layout', 'Editar Parámetro');
		if (!$this->Par->exists($id)) {
			throw new NotFoundException(__('Invalid par'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Par->save($this->request->data)) {
				$this->Session->setFlash(__('The par has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Par.' . $this->Par->primaryKey => $id));
			$this->request->data = $this->Par->find('first', $options);
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
		$this->Par->id = $id;
		if (!$this->Par->exists()) {
			throw new NotFoundException(__('Invalid par'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Par->delete()) {
			$this->Session->setFlash(__('The par has been deleted.'));
		} else {
			$this->Session->setFlash(__('The par could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
