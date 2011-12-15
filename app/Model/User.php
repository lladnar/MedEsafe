<?php
//App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Group $Group
 */
class User extends AppModel {
    
    public $name = 'User';
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    /**
     * Virtual field
     *
     * @var array
     */
	public $virtualFields = array(
        'name' => 'CONCAT(User.first_name, " ", User.last_name)'
    );

    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'name';
        
    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
    
		'username' => array(
			'minLength' => array(
				'rule' => array('minLength', 6),
				'message' => '*USERNAME MUST BE 6 CHARACTERS OR MORE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '*USERNAME MUST ONLY CONTAIN LETTERS AND NUMBERS',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
				'rule' => 'isUnique',
				'message' => '*USERNAME ALREADY EXISTS IN DATABASE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '*REQUIRED FIELD - MUST ENTER FIRST NAME',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
        'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '*REQUIRED FIELD - MUST ENTER LAST NAME',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
        'group_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '*REQUIRED FIELD - MUST SELECT GROUP',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '*GROUP MUST ONLY CONTAIN LETTERS AND NUMBERS',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'email' => array(			
            'email' => array(
				'rule' => array('email', true),
				'message' => '*ENTER VALID EMAIL ADDRESS',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
				'rule' => 'isUnique',
				'message' => '*EMAIL ADDRESS ALREADY EXISTS IN DATABASE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
        'dea' => array(
			'between' => array(
				'rule' => array('between', 9, 9),
				'message' => '*DEA# MUST CONTAIN 9 CHARACTERS',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '*DEA# MUST ONLY CONTAIN LETTERS AND NUMBERS',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
				'rule' => 'isUnique',
				'message' => '*DEA# ALREADY EXISTS IN DATABASE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'password' => array(
			'minLength' => array(
				'rule' => array('minLength', 6),
				'message' => '*PASSWORD MUST BE 6 CHARACTERS OR MORE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '*PASSWORD MUST ONLY CONTAIN LETTERS AND NUMBERS',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'compareFields' => array(
				'rule' => 'compareFields',
				'message' => '*PASSWORDS MUST MATCH',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'confirm_password' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => '*REQUIRED FIELD - MUST RE-TYPE PASSWORD',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
       
    /**
     * User::compareFields()
     * 
     * @param mixed $data
     * @return
     */
    public function compareFields($data) {
        if ($data['password'] == $this->data['User']['confirm_password']) {
            return true;
        }
        $this->invalidate('confirm_password', '*PASSWORDS MUST MATCH');
        return false;
    }

    /**
     * User::parentNode()
     * 
     * @return
     */
    function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

// Apply per-group only permissions:   
//    function bindNode($user) {
//    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
//    }
        
    /**
     * belongsTo associations
     *
     * @var array
     */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			//'conditions' => '',
			//'fields' => '',
			//'order' => ''
		)
	);

    /**
     * hasMany associations
     *
     * @var array
     */
	public $hasMany = array(
		'ActivityLog' => array(
			'className' => 'ActivityLog',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Encounter' => array(
			'className' => 'Encounter',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Setting' => array(
			'className' => 'Setting',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    /**
     * User::beforeSave()
     * 
     * @return
     */
    public function beforeSave() {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
}