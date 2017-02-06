<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpostosOrigensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpostosOrigensTable Test Case
 */
class ImpostosOrigensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpostosOrigensTable
     */
    public $ImpostosOrigens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.impostos_origens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImpostosOrigens') ? [] : ['className' => 'App\Model\Table\ImpostosOrigensTable'];
        $this->ImpostosOrigens = TableRegistry::get('ImpostosOrigens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImpostosOrigens);

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
