<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistrictAreasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistrictAreasTable Test Case
 */
class DistrictAreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DistrictAreasTable
     */
    protected $DistrictAreas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DistrictAreas',
        'app.Districts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DistrictAreas') ? [] : ['className' => DistrictAreasTable::class];
        $this->DistrictAreas = $this->getTableLocator()->get('DistrictAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DistrictAreas);

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
