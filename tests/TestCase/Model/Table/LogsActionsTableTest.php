<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogsActionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogsActionsTable Test Case
 */
class LogsActionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogsActionsTable
     */
    protected $LogsActions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LogsActions',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LogsActions') ? [] : ['className' => LogsActionsTable::class];
        $this->LogsActions = $this->getTableLocator()->get('LogsActions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LogsActions);

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
