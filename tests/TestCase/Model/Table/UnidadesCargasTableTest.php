<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidadesCargasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidadesCargasTable Test Case
 */
class UnidadesCargasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidadesCargasTable
     */
    public $UnidadesCargas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.unidades_cargas',
        'app.produtos',
        'app.grupos',
        'app.icms',
        'app.impostos_origems',
        'app.promocoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UnidadesCargas') ? [] : ['className' => 'App\Model\Table\UnidadesCargasTable'];
        $this->UnidadesCargas = TableRegistry::get('UnidadesCargas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UnidadesCargas);

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
