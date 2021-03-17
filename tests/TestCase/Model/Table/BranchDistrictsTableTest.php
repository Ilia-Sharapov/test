<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BranchDistrictsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BranchDistrictsTable Test Case
 */
class BranchDistrictsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BranchDistrictsTable
     */
    protected $BranchDistricts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BranchDistricts',
        'app.Branches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BranchDistricts') ? [] : ['className' => BranchDistrictsTable::class];
        $this->BranchDistricts = $this->getTableLocator()->get('BranchDistricts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BranchDistricts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
