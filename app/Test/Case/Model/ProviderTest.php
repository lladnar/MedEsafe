<?php
/* Provider Test cases generated on: 2011-12-02 17:43:14 : 1322847794*/
App::uses('Provider', 'Model');

/**
 * Provider Test Case
 *
 */
class ProviderTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.provider', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Provider = ClassRegistry::init('Provider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provider);

		parent::tearDown();
	}

}
