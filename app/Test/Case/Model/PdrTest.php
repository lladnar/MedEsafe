<?php
/* Pdr Test cases generated on: 2011-12-08 20:35:01 : 1323376501*/
App::uses('Pdr', 'Model');

/**
 * Pdr Test Case
 *
 */
class PdrTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pdr');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Pdr = ClassRegistry::init('Pdr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pdr);

		parent::tearDown();
	}

}
