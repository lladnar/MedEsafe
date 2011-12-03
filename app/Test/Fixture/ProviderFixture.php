<?php
/* Provider Fixture generated on: 2011-12-02 17:43:13 : 1322847793 */

/**
 * ProviderFixture
 *
 */
class ProviderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'insurance_company' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'group_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'id_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_relationship' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 7, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_ssn' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_dob' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'subscriber_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 127, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_city' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_state' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'subscriber_zip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'patient_id' => 1,
			'insurance_company' => 'Lorem ipsum dolor sit amet',
			'group_number' => 'Lorem ipsum dolor ',
			'id_number' => 'Lorem ipsum dolor ',
			'subscriber_name' => 'Lorem ipsum dolor sit amet',
			'subscriber_relationship' => 'Lorem',
			'subscriber_ssn' => 'Lorem ips',
			'subscriber_dob' => '2011-12-02',
			'subscriber_address' => 'Lorem ipsum dolor sit amet',
			'subscriber_city' => 'Lorem ipsum dolor sit amet',
			'subscriber_state' => '',
			'subscriber_zip' => 'Lor'
		),
	);
}
