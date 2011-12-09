<?php
App::uses('AppController', 'Controller');

/**
 * Settings Controller
 *
 * @property Setting $Setting
 */
class SettingsController extends AppController {
    
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
		$this->Setting->id = $id;
		if (!$this->Setting->exists()) {
			throw new NotFoundException(__('Invalid setting.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('Calendar settings have been saved.'));
				$this->redirect(array('controller' => 'users', 'action' => 'manage'));
			} else {
				$this->Session->setFlash(__('Calendar settings could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Setting->read(null, $id);
		}
		$users = $this->Setting->User->find('list');
		$this->set(compact('users'));
	}
}
