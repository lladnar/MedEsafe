<?php
App::uses('AppController', 'Controller');
/**
 * EncounterTypes Controller
 *
 * @property EncounterType $EncounterType
 */
class EncounterTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EncounterType->recursive = 0;
		$this->set('encounterTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EncounterType->id = $id;
		if (!$this->EncounterType->exists()) {
			throw new NotFoundException(__('Invalid encounter type'));
		}
		$this->set('encounterType', $this->EncounterType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EncounterType->create();
			if ($this->EncounterType->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter type could not be saved. Please, try again.'));
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
		$this->EncounterType->id = $id;
		if (!$this->EncounterType->exists()) {
			throw new NotFoundException(__('Invalid encounter type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EncounterType->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EncounterType->read(null, $id);
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
		$this->EncounterType->id = $id;
		if (!$this->EncounterType->exists()) {
			throw new NotFoundException(__('Invalid encounter type'));
		}
		if ($this->EncounterType->delete()) {
			$this->Session->setFlash(__('Encounter type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Encounter type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
