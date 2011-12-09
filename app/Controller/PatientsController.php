<?php
App::uses('AppController', 'Controller');

/**
 * Patients Controller
 *
 * @property Patient $Patient
 */

class PatientsController extends AppController {
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Patient->recursive = 0;
		$this->set('patients', $this->paginate());
        $this->set('show');
	}

/**
 * search method
 *
 * @return void
 */
    public function search() { 
            $this->set('results', $this->Patient->search($this->data['Patient']['q']));
            $this->paginate();
    }
    
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient.'));
		}
		$this->set('patient', $this->Patient->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patient->create();
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('Patient created.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Patient not created. Errors found.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('Patient updated.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Patient not updated. Errors found.'));
			}
		} else {
			$this->request->data = $this->Patient->read(null, $id);
		}
	}
    
/**
 * import method
 *
 * @return void
 */
    public function import(){
        
    }
      
/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient.'));
		}
		if ($this->Patient->delete()) {
			$this->Session->setFlash(__('Patient deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patient not deleted.'));
		$this->redirect(array('action' => 'index'));
	}
}
