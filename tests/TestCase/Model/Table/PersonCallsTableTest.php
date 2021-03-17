<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonCallsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonCallsTable Test Case
 */
class PersonCallsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonCallsTable
     */
    protected $PersonCalls;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PersonCalls',
        'app.People',
        'app.Managers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PersonCalls') ? [] : ['className' => PersonCallsTable::class];
        $this->PersonCalls = $this->getTableLocator()->get('PersonCalls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PersonCalls);

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
