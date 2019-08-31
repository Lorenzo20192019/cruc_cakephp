<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesesTable Test Case
 */
class MesesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MesesTable
     */
    public $Meses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Meses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Meses') ? [] : ['className' => MesesTable::class];
        $this->Meses = TableRegistry::getTableLocator()->get('Meses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Meses);

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
