<?php
App::uses ('Controller', 'Controller');

class AppController extends Controller {
    
    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session',
    );
    public $helpers = array('Html', 'Form', 'Session', 'Paginator');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'appointments', 'action' => 'index');
    }
}
