<?php
/* ActivityLog Test cases generated on: 2011-12-09 19:09:22 : 1323457762*/
App::uses('ActivityLog', 'Model');

/**
 * ActivityLog Test Case
 *
 */
class ActivityLogTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.activity_log', 'app.user', 'app.group', 'app.appointment', 'app.patient', 'app.provider', 'app.encounter', 'app.encounter_type', 'app.attachment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ActivityLog = ClassRegistry::init('ActivityLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivityLog);

		parent::tearDown();
	}

}
