<?php

App::uses('AppController', 'Controller');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 */
class AppointmentsController extends AppController {


    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->Appointment->recursive = 0;
		$this->set('appointments', $this->paginate());
	}

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment.'));
		}
		$this->set('appointment', $this->Appointment->read(null, $id));
	}

    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->Appointment->create();
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('Appointment saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Appointment not saved.  Errors found.'));
			}
		}
		$patients = $this->Appointment->Patient->find('list');
		$users = $this->Appointment->User->find('list');
		$this->set(compact('patients', 'users'));
	}

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
	public function edit($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('Appointment saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Appointment not saved.  Errors found.'));
			}
		} else {
			$this->request->data = $this->Appointment->read(null, $id);
		}
		$patients = $this->Appointment->Patient->find('list');
		$users = $this->Appointment->User->find('list');
		$this->set(compact('patients', 'users'));
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
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment.'));
		}
		if ($this->Appointment->delete()) {
			$this->Session->setFlash(__('Appointment deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Appointment not deleted.'));
		$this->redirect(array('action' => 'index'));
	}
    
    public function calendar() {
        
    }
}
