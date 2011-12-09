<?php
App::uses('AppModel', 'Model');

/**
 * Pdr Model
 *
 */
class Pdr extends AppModel {
    
    /**
     * Validation rules
     *
     * @var array
     */
	public $validate = array(
		'url' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => '*MUST ENTER VALID URL',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
