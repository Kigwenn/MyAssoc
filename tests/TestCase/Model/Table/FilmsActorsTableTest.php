<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmsActorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmsActorsTable Test Case
 */
class FilmsActorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmsActorsTable
     */
    public $FilmsActors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.films_actors',
        'app.films',
        'app.actors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FilmsActors') ? [] : ['className' => FilmsActorsTable::class];
        $this->FilmsActors = TableRegistry::get('FilmsActors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilmsActors);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
