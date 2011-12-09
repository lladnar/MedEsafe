<?php
/* Encounter Test cases generated on: 2011-12-09 18:37:11 : 1323455831*/
App::uses('Encounter', 'Model');

/**
 * Encounter Test Case
 *
 */
class EncounterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.encounter', 'app.patient', 'app.provider', 'app.encounter_type', 'app.user', 'app.group', 'app.appointment', 'app.attachment', 'app.activity_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Encounter = ClassRegistry::init('Encounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encounter);

		parent::tearDown();
	}

}
