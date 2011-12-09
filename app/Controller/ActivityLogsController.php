<?php
App::uses('AppController', 'Controller');
/**
 * ActivityLogs Controller
 *
 * @property ActivityLog $ActivityLog
 */
class ActivityLogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActivityLog->recursive = 0;
		$this->set('activityLogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ActivityLog->id = $id;
		if (!$this->ActivityLog->exists()) {
			throw new NotFoundException(__('Invalid activity log'));
		}
		$this->set('activityLog', $this->ActivityLog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivityLog->create();
			if ($this->ActivityLog->save($this->request->data)) {
				$this->Session->setFlash(__('The activity log has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity log could not be saved. Please, try again.'));
			}
		}
		$users = $this->ActivityLog->User->find('list');
		$appointments = $this->ActivityLog->Appointment->find('list');
		$encounters = $this->ActivityLog->Encounter->find('list');
		$providers = $this->ActivityLog->Provider->find('list');
		$this->set(compact('users', 'appointments', 'encounters', 'providers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ActivityLog->id = $id;
		if (!$this->ActivityLog->exists()) {
			throw new NotFoundException(__('Invalid activity log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActivityLog->save($this->request->data)) {
				$this->Session->setFlash(__('The activity log has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity log could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ActivityLog->read(null, $id);
		}
		$users = $this->ActivityLog->User->find('list');
		$appointments = $this->ActivityLog->Appointment->find('list');
		$encounters = $this->ActivityLog->Encounter->find('list');
		$providers = $this->ActivityLog->Provider->find('list');
		$this->set(compact('users', 'appointments', 'encounters', 'providers'));
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
		$this->ActivityLog->id = $id;
		if (!$this->ActivityLog->exists()) {
			throw new NotFoundException(__('Invalid activity log'));
		}
		if ($this->ActivityLog->delete()) {
			$this->Session->setFlash(__('Activity log deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Activity log was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
