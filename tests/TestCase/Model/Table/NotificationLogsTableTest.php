<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificationLogsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificationLogsTable Test Case
 */
class NotificationLogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificationLogsTable
     */
    protected $NotificationLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.NotificationLogs',
        'app.Models',
        'app.Senders',
        'app.Recipients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('NotificationLogs') ? [] : ['className' => NotificationLogsTable::class];
        $this->NotificationLogs = $this->getTableLocator()->get('NotificationLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NotificationLogs);

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
