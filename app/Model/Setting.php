<?php
App::uses('AppModel', 'Model');

/**
 * Setting Model
 *
 * @property User $User
 */
class Setting extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '*MUST CHOOSE CUSTODIAN',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
    /**
     * belongsTo associations
     *
     * @var array
     */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
