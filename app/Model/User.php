<?php
App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Group $Group
 */
class User extends AppModel {
    
    public $name = 'User';
    
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
    
		'username' => array(
			'minlength' => array(
				'rule' => array('minlength', 6),
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
		'password' => array(
			'minlength' => array(
				'rule' => array('minlength', 8),
				'message' => '*PASSWORD MUST BE 8 CHARACTERS OR MORE',
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
		),
        'group_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
    public $actsAs = array('Acl' => array('type' => 'requester'));

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

// Apply per-group only permissions    
/*    function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
}*/

    public function beforeSave() {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
}