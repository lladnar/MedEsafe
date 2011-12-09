<?php
/* EncounterTypes Test cases generated on: 2011-12-09 22:32:03 : 1323469923*/
App::uses('EncounterTypesController', 'Controller');

/**
 * TestEncounterTypesController *
 */
class TestEncounterTypesController extends EncounterTypesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * EncounterTypesController Test Case
 *
 */
class EncounterTypesControllerTestCase extends CakeTestCase {
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

		$this->EncounterTypes = new TestEncounterTypesController();
		$this->EncounterTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EncounterTypes);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
