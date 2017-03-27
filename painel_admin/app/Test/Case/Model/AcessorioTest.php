<?php
App::uses('Acessorio', 'Model');

/**
 * Acessorio Test Case
 */
class AcessorioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acessorio',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acessorio = ClassRegistry::init('Acessorio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acessorio);

		parent::tearDown();
	}

}
