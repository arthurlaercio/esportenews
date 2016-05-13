<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatosTable Test Case
 */
class CampeonatosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatosTable
     */
    public $Campeonatos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campeonatos',
        'app.participantes',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Campeonatos') ? [] : ['className' => 'App\Model\Table\CampeonatosTable'];
        $this->Campeonatos = TableRegistry::get('Campeonatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campeonatos);

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
