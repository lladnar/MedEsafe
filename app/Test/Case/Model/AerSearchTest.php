<?php
/* AerSearch Test cases generated on: 2011-12-05 15:48:44 : 1323100124*/
App::uses('AerSearch', 'Model');

/**
 * AerSearch Test Case
 *
 */
class AerSearchTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aer_search');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->AerSearch = ClassRegistry::init('AerSearch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AerSearch);

		parent::tearDown();
	}

}
