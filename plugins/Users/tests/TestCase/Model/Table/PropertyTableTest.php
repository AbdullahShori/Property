<?php
namespace Users\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Users\Model\Table\PropertyTable;

/**
 * Users\Model\Table\PropertyTable Test Case
 */
class PropertyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Users\Model\Table\PropertyTable
     */
    public $Property;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Users.Property',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Property') ? [] : ['className' => PropertyTable::class];
        $this->Property = TableRegistry::getTableLocator()->get('Property', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Property);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
