<?php
App::uses('AppModel', 'Model');
/**
 * Appointment Model
 *
 * @property Patient $Patient
 * @property User $User
 */
class Appointment extends AppModel {
    
    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'start_time';  

    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'patient_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '*REQUIRED FIELD',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '*REQUIRED FIELD',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '*REQUIRED FIELD',
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
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
			'foreignKey' => 'appointment_id',
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
			'foreignKey' => 'appointment_id',
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
