<?php
/* Setting Test cases generated on: 2011-12-09 00:48:23 : 1323391703*/
App::uses('Setting', 'Model');

/**
 * Setting Test Case
 *
 */
class SettingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.setting', 'app.user', 'app.group', 'app.appointment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Setting = ClassRegistry::init('Setting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Setting);

		parent::tearDown();
	}

}
