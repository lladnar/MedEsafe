<?php
App::uses('AppModel', 'Model');
/**
 * EncounterType Model
 *
 * @property Encounter $Encounter
 */
class EncounterType extends AppModel {
    
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
	);
    
    /**
     * hasMany associations
     *
     * @var array
     */
	public $hasMany = array(
		'Encounter' => array(
			'className' => 'Encounter',
			'foreignKey' => 'encounter_type_id',
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
