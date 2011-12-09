<?php
App::uses('AppModel', 'Model');
/**
 * AerSearch Model
 *
 */
class AerSearch extends AppModel {
    
    public $name = 'AerSearch';
            
    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'url' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'REQUIRED FIELD - MUST ENTER URL',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'url' => array(
				'rule' => array('url'),
				'message' => 'MUST ENTER VALID URL',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
	);
}
