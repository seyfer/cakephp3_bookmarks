<?php
namespace UsersFind\Test\TestCase\Model\Behavior;

use Cake\TestSuite\TestCase;
use UsersFind\Model\Behavior\UsersFindBehavior;

/**
 * UsersFind\Model\Behavior\UsersFindBehavior Test Case
 */
class UsersFindBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \UsersFind\Model\Behavior\UsersFindBehavior
     */
    public $UsersFind;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->UsersFind = new UsersFindBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersFind);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
