<?php
App::uses ('Controller', 'Controller');
/**
 * App Controller
 *
 * @property Controller $Controller
 */
class AppController extends Controller {    
    public $components = array(
        'Session',
        'Acl',
        'Auth' => array(
            'loginAction' => array('controller' => 'users', 'action' => 'login'),
            'loginRedirect' => array('controller' => 'appointments', 'action' => 'calendar'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'Not authorized to access this page.',
            'authorize' => array('Controller')
        )
    );
    public $helpers = array('Html', 'Js', 'Form', 'Session', 'Paginator');
    
    //TEMPORARILY ALLOW ALL LOGGED IN USERS FULL PERMISSIONS:
    /**
     * AppController::isAuthorized()
     * 
     * @param mixed $user
     * @return
     */
    public function isAuthorized($user) {
        return true;
    }
    
    /**
     * AppController::beforeFilter()
     * 
     * @return
     */
    public function beforeFilter() {
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    //  retrieve pdr website and place in a variable     
        $this->loadModel('Pdr', 1);
        $pdr = $this->Pdr->read();
        $this->set('pdr', $this->Pdr->read());
    }
}
