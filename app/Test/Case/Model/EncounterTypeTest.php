<?php
/* EncounterType Test cases generated on: 2011-12-09 18:36:17 : 1323455777*/
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
	public $fixtures = array('app.encounter_type', 'app.encounter');

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
