<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IcmsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IcmsTable Test Case
 */
class IcmsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IcmsTable
     */
    public $Icms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.icms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Icms') ? [] : ['className' => 'App\Model\Table\IcmsTable'];
        $this->Icms = TableRegistry::get('Icms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Icms);

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
