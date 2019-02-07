<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NationalitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NationalitiesTable Test Case
 */
class NationalitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NationalitiesTable
     */
    public $Nationalities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Nationalities',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Nationalities') ? [] : ['className' => NationalitiesTable::class];
        $this->Nationalities = TableRegistry::getTableLocator()->get('Nationalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nationalities);

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
