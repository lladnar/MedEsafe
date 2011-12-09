<?php
/* EncounterType Test cases generated on: 2011-12-09 22:32:02 : 1323469922*/
App::uses('EncounterType', 'Model');

/**
 * EncounterType Test Case
 *
 */
class EncounterTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.encounter_type', 'app.encounter', 'app.patient', 'app.provider', 'app.user', 'app.group', 'app.appointment', 'app.attachment', 'app.activity_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->EncounterType = ClassRegistry::init('EncounterType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EncounterType);

		parent::tearDown();
	}

}
