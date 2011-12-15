<?php
App::uses('AppModel', 'Model');
/**
 * Provider Model
 *
 * @property Patient $Patient
 */
class Provider extends AppModel {
    
    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'patient_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Input not allowed.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'company' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subscriber' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ssn' => array(
			'ssn' => array(
				'rule' => array('ssn', null, 'us'),
				'message' => '*MUST USE "000-00-0000" FORMAT',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dob' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => '*REQUIRED FIELD - MUST ENTER COMPLETE DATE',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'zip' => array(
			'postal' => array(
                'rule' => array('postal', null, 'us'),
                'message' => '*ENTER VALID US ZIP CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
		),
	);
    
    /**
     * belongsTo associations
     *
     * @var array
     */
	public $belongsTo = array(
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
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
			'foreignKey' => 'provider_id',
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
}
