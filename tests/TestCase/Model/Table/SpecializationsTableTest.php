<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecializationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecializationsTable Test Case
 */
class SpecializationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecializationsTable
     */
    protected $Specializations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Specializations',
        'app.Posts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Specializations') ? [] : ['className' => SpecializationsTable::class];
        $this->Specializations = $this->getTableLocator()->get('Specializations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Specializations);

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
