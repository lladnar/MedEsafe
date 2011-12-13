<?php
App::uses('AppController', 'Controller');

/**
 * Pdrs Controller
 *
 * @property Pdr $Pdr
 */
class PdrsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->redirect(array('action' => 'edit/1'));
	}

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
	public function edit($id = null) {
		$this->Pdr->id = $id;
		if (!$this->Pdr->exists()) {
			throw new NotFoundException(__('Invalid URL.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pdr->save($this->request->data)) {
				$this->Session->setFlash(__('URL saved.'));
				$this->redirect(array('controller' => 'users', 'action' => 'manage'));
			} else {
				$this->Session->setFlash(__('URL not saved.  Errors found.'));
			}
		} else {
			$this->request->data = $this->Pdr->read(null, $id);
		}
	}
}
