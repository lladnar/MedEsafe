<?php
/* Encounter Test cases generated on: 2011-12-02 06:04:28 : 1322805868*/
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
	public $fixtures = array('app.encounter');

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
