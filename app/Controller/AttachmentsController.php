<?php
App::uses('AppController', 'Controller');
/**
 * Attachments Controller
 *
 * @property Attachment $Attachment
 */
class AttachmentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attachment->recursive = 0;
		$this->set('attachments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Attachment->id = $id;
		if (!$this->Attachment->exists()) {
			throw new NotFoundException(__('Invalid attachment.'));
		}
		$this->set('attachment', $this->Attachment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attachment->create();
			if ($this->Attachment->save($this->request->data)) {
				$this->Session->setFlash(__('Attachment saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Attachment not saved.  Errors found.'));
			}
		}
		$patients = $this->Attachment->Patient->find('list');
		$encounters = $this->Attachment->Encounter->find('list');
		$this->set(compact('patients', 'encounters'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Attachment->id = $id;
		if (!$this->Attachment->exists()) {
			throw new NotFoundException(__('Invalid attachment.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attachment->save($this->request->data)) {
				$this->Session->setFlash(__('Attachment saved.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Attachment not saved.  Errors found.'));
			}
		} else {
			$this->request->data = $this->Attachment->read(null, $id);
		}
		$patients = $this->Attachment->Patient->find('list');
		$encounters = $this->Attachment->Encounter->find('list');
		$this->set(compact('patients', 'encounters'));
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
		$this->Attachment->id = $id;
		if (!$this->Attachment->exists()) {
			throw new NotFoundException(__('Invalid attachment.'));
		}
		if ($this->Attachment->delete()) {
			$this->Session->setFlash(__('Attachment deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Attachment not deleted.'));
		$this->redirect(array('action' => 'index'));
	}
}
