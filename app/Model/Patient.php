<?php
App::uses('AppModel', 'Model');
/**
 * Patient Model
 *
 * @property Appointment $Appointment
 * @property Attachment $Attachment
 * @property Encounter $Encounter
 * @property Provider $Provider
 */
class Patient extends AppModel {
    
    public $name = 'Patient';
      
 // SEARCH ENGINE:
    public $actsAs = array('Searchable');
    
    /**
     * Virtual field
     *
     * @var array
     */
	public $virtualFields = array(
        'name' => 'CONCAT(Patient.first_name, " ", Patient.last_name)'
    );
    
    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'name'
    ; 
           
    /**
     * Validation rules
     *
     * @var array
     */
  	public $validate = array(		
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
        'ssn' => array(			
            'ssn' => array(
				'rule' => array('ssn', null, 'us'),
				'message' => '*MUST USE "000-00-0000" FORMAT',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
				'rule' => 'isUnique',
				'message' => '*SSN ALREADY EXISTS IN DATABASE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
        'home_phone' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'cell_phone' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'work_phone' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'fax' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'home_zip' => array(
            'postal' => array(
                'rule' => array('postal', null, 'us'),
                'message' => '*ENTER VALID US ZIP CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'work_zip' => array(
            'postal' => array(
                'rule' => array('postal', null, 'us'),
                'message' => '*ENTER VALID US ZIP CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'email' => array(			
            'email' => array(
				'rule' => array('email', true),
				'message' => '*ENTER VALID EMAIL ADDRESS',
				'allowEmpty' => true,
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
        'contact_home' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_cell' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_work' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_zip' => array(
            'postal' => array(
                'rule' => array('postal', null, 'us'),
                'message' => '*ENTER VALID US ZIP CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_email' => array(			
            'email' => array(
				'rule' => array('email', true),
				'message' => '*ENTER VALID EMAIL ADDRESS',
				'allowEmpty' => true,
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
		)
	);
        
    /**
     * hasMany associations
     *
     * @var array
     */
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'patient_id',
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
		'Attachment' => array(
			'className' => 'Attachment',
			'foreignKey' => 'patient_id',
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
			'foreignKey' => 'patient_id',
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
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'patient_id',
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
