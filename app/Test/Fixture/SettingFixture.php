<?php
/* Setting Fixture generated on: 2011-12-09 00:48:23 : 1323391703 */

/**
 * SettingFixture
 *
 */
class SettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'week_start' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'week_end' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'day_start' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'day_end' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
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
			'user_id' => 1,
			'week_start' => 'Lorem ',
			'week_end' => 'Lorem ',
			'day_start' => '00:48:23',
			'day_end' => '00:48:23'
		),
	);
}
