<?php
/* Attachment Test cases generated on: 2011-12-09 18:36:36 : 1323455796*/
App::uses('Attachment', 'Model');

/**
 * Attachment Test Case
 *
 */
class AttachmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.attachment', 'app.patient', 'app.provider', 'app.encounter');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Attachment = ClassRegistry::init('Attachment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attachment);

		parent::tearDown();
	}

}
