<?php
App::uses('AppController', 'Controller');
/**
 * Providers Controller
 *
 * @property Provider $Provider
 */
class ProvidersController extends AppController {
    /**
     * beforeFilter method
     * 
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('current_patient', $this->Provider->Patient->id);
    }
    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->Provider->recursive = 0;
		$this->set('providers', $this->paginate());
	}
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid insurance provider.'));
		}
		$this->set('provider', $this->Provider->read(null, $id));
	}
    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provider->create();
			if ($this->Provider->save($this->request->data)) {
                // WRITE PROVIDER ID TO PATIENT.PRIMARY IF CHECKBOX CHECKED (NOT WORKING)
                if ($this->request->data['Provider']['primary'] == 1) {
                $this->Patient['Patient']['primary'] == $this->request->data['Provider']['id'];
            }
				$this->Session->setFlash(__('Insurance provider saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Insurance provider not saved.  Errors found.'));
			}
		}
		$patients = $this->Provider->Patient->find('list');
		$this->set(compact('patients'));
	}
    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
	public function edit($id = null) {
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid insurance provider.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {            
			if ($this->Provider->save($this->request->data)) {
                // WRITE PROVIDER ID TO PATIENT.PRIMARY IF CHECKBOX CHECKED (NOT WORKING)
                if ($this->request->data['Provider']['primary'] == 1) {                                        
                    $provider['Patient']['primary'] == $provider['Provider']['id'];
            }
				$this->Session->setFlash(__('Insurance provider saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Insurance provider not saved.  Errors found.'));
			}
		} else {
			$this->request->data = $this->Provider->read(null, $id);
		}
		$patients = $this->Provider->Patient->find('list');
		$this->set(compact('patients'));
        $this->set('provider', $this->Provider->read(null, $id));
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
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid insurance provider.'));
		}
		if ($this->Provider->delete()) {
			$this->Session->setFlash(__('Insurance provider deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Insurance provider not deleted.'));
		$this->redirect(array('action' => 'index'));
	}
}
