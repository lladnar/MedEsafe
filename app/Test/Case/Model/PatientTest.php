<?php
/* Patient Test cases generated on: 2011-11-18 00:03:06 : 1321574586*/
App::uses('Patient', 'Model');

/**
 * Patient Test Case
 *
 */
class PatientTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Patient = ClassRegistry::init('Patient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patient);

		parent::tearDown();
	}

}
