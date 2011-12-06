<?php
App::uses('AppController', 'Controller');

/**
 * AerSearches Controller
 *
 * @property AerSearch $AerSearch
 */
 
class AerSearchesController extends AppController {
    
    function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AerSearch->recursive = 0;
		$this->set('aerSearches', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AerSearch->id = $id;
		if (!$this->AerSearch->exists()) {
			throw new NotFoundException(__('Invalid AER search.'));
		}
		$this->set('aerSearch', $this->AerSearch->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AerSearch->create();
			if ($this->AerSearch->save($this->request->data)) {
				$this->Session->setFlash(__('The aer search has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aer search could not be saved. Please, try again.'));
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
	    $this->AerSearch->recursive = 0;
		$this->set('aerSearches', $this->paginate());
		$this->AerSearch->id = $id;
		if (!$this->AerSearch->exists()) {
			throw new NotFoundException(__('Invalid aer search'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AerSearch->save($this->request->data)) {
				$this->Session->setFlash(__('The aer search has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aer search could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AerSearch->read(null, $id);
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
		$this->AerSearch->id = $id;
		if (!$this->AerSearch->exists()) {
			throw new NotFoundException(__('Invalid aer search'));
		}
		if ($this->AerSearch->delete()) {
			$this->Session->setFlash(__('Aer search deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aer search was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
