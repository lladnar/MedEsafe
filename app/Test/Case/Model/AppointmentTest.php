<?php
/* Appointment Test cases generated on: 2011-12-09 01:48:01 : 1323395281*/
App::uses('Appointment', 'Model');

/**
 * Appointment Test Case
 *
 */
class AppointmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.appointment', 'app.patient', 'app.provider', 'app.user', 'app.group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Appointment = ClassRegistry::init('Appointment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appointment);

		parent::tearDown();
	}

}
