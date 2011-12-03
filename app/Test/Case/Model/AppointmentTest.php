<?php
/* Appointment Test cases generated on: 2011-12-02 06:03:51 : 1322805831*/
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
	public $fixtures = array('app.appointment');

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
