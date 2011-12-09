<?php
App::uses('AppController', 'Controller');
/**
 * Encounters Controller
 *
 * @property Encounter $Encounter
 */
class EncountersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Encounter->recursive = 0;
		$this->set('encounters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Encounter->id = $id;
		if (!$this->Encounter->exists()) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		$this->set('encounter', $this->Encounter->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Encounter->create();
			if ($this->Encounter->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter could not be saved. Please, try again.'));
			}
		}
		$patients = $this->Encounter->Patient->find('list');
		$encounterTypes = $this->Encounter->EncounterType->find('list');
		$users = $this->Encounter->User->find('list');
		$appointments = $this->Encounter->Appointment->find('list');
		$attachments = $this->Encounter->Attachment->find('list');
		$this->set(compact('patients', 'encounterTypes', 'users', 'appointments', 'attachments'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Encounter->id = $id;
		if (!$this->Encounter->exists()) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Encounter->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Encounter->read(null, $id);
		}
		$patients = $this->Encounter->Patient->find('list');
		$encounterTypes = $this->Encounter->EncounterType->find('list');
		$users = $this->Encounter->User->find('list');
		$appointments = $this->Encounter->Appointment->find('list');
		$attachments = $this->Encounter->Attachment->find('list');
		$this->set(compact('patients', 'encounterTypes', 'users', 'appointments', 'attachments'));
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
		$this->Encounter->id = $id;
		if (!$this->Encounter->exists()) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		if ($this->Encounter->delete()) {
			$this->Session->setFlash(__('Encounter deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Encounter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
