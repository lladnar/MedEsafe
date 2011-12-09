<?php
App::uses('AppModel', 'Model');

/**
 * Patient Model
 *
 */
class Patient extends AppModel {
    
    public $name = 'Patient';
    
 // SEARCH ENGINE:
    public $actsAs = array('Searchable');
    
    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'name';
    
    /**
     * Virtual field
     *
     * @var array
     */
	public $virtualFields = array(
        'name' => 'CONCAT(Patient.first_name, " ", Patient.last_name)'
    );
    
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
		'date_of_birth' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => '*REQUIRED FIELD - MUST ENTER COMPLETE DATE',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),		
        'social_security' => array(			
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
        'contact_home_phone' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_cell_phone' => array(
            'phone' => array(
                'rule' => array('phone', null, 'us'),
                'message' => '*ENTER VALID US PHONE NUMBER WITH AREA CODE',
                'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'contact_work_phone' => array(
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
		),
        'insurance_company' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '*REQUIRED FIELD - MUST ENTER COMPANY',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
        'subscriber' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '*REQUIRED FIELD - MUST ENTER NAME',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'subscriber_dob' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => '*REQUIRED FIELD - MUST ENTER COMPLETE DATE',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),		
        'subscriber_ssn' => array(			
            'ssn' => array(
				'rule' => array('ssn', null, 'us'),
				'message' => '*MUST USE "000-00-0000" FORMAT',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations			
			)
		),
        'subscriber_zip' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
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
