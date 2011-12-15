<?php
App::uses('AppController', 'Controller');

/**
 * Lookups Controller
 *
 * @property Lookup $Lookup
 */
class LookupsController extends AppController {
    
    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->Lookup->recursive = 0;
		$this->set('lookups', $this->paginate());
	}
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		$this->Lookup->id = $id;
		if (!$this->Lookup->exists()) {
			throw new NotFoundException(__('Invalid lookup.'));
		}
		$this->set('lookup', $this->Lookup->read(null, $id));
	}
    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lookup->create();
			if ($this->Lookup->save($this->request->data)) {
				$this->Session->setFlash(__('Lookup saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lookup not saved.  Errors found.'));
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
		$this->Lookup->id = $id;
		if (!$this->Lookup->exists()) {
			throw new NotFoundException(__('Invalid lookup.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lookup->save($this->request->data)) {
				$this->Session->setFlash(__('Lookup saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lookup not saved.  Errors found.'));
			}
		} else {
			$this->request->data = $this->Lookup->read(null, $id);
		}
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
		$this->Lookup->id = $id;
		if (!$this->Lookup->exists()) {
			throw new NotFoundException(__('Invalid lookup.'));
		}
		if ($this->Lookup->delete()) {
			$this->Session->setFlash(__('Lookup deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lookup not deleted.'));
		$this->redirect(array('action' => 'index'));
	}
}
