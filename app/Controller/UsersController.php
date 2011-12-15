<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    /**
     * index method
     *
     * @return void
     */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user.'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
    /**
     * add method
     *
     * @return void
     */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data(''))) {
				$this->Session->setFlash(__('User created.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('User not created. Errors found.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('User updated.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('User not updated. Errors found.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user.'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User not deleted.'));
		$this->redirect(array('action' => 'index'));
	}    
    function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash('Login successful.');
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Username or password incorrect.');
            }
        }
        
        if ($this->Session->read('Auth.User')) {
            $this->Session->setFlash('Already logged in!');
            $this->redirect('/', null, false);
        }
    }    
    function logout() {
        $this->Session->setFlash('Logout successful.');
        $this->redirect($this->Auth->logout());
    }    
    /**
     * manage method
     *
     * @return void
     */
	public function manage() {
        if ($this->request->is('post')) {
            $this->redirect(array('controller' => $this->request->data['User']['radio'], 'action' => 'index'));
        }
	}
}
