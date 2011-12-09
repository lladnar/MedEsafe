<?php
/* Lookup Test cases generated on: 2011-12-09 18:17:53 : 1323454673*/
App::uses('Lookup', 'Model');

/**
 * Lookup Test Case
 *
 */
class LookupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.lookup');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Lookup = ClassRegistry::init('Lookup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lookup);

		parent::tearDown();
	}

}
