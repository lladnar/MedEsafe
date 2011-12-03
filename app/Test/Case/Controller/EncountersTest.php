<?php
/* Encounters Test cases generated on: 2011-12-02 06:04:36 : 1322805876*/
App::uses('Encounters', 'Controller');

/**
 * TestEncounters *
 */
class TestEncounters extends Encounters {
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
 * Encounters Test Case
 *
 */
class EncountersTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Encounters = new TestEncounters();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encounters);

		parent::tearDown();
	}

}
