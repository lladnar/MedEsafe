<?php
/* AerSearch Fixture generated on: 2011-12-05 15:48:44 : 1323100124 */

/**
 * AerSearchFixture
 *
 */
class AerSearchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'regular' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'post_value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'regular' => 'Lorem ipsum dolor sit amet',
			'post_value' => 'Lorem ipsum dolor sit amet'
		),
	);
}
