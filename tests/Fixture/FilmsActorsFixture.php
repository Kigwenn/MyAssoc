<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FilmsActorsFixture
 *
 */
class FilmsActorsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'film_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'actor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'actor_key' => ['type' => 'index', 'columns' => ['actor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['film_id', 'actor_id'], 'length' => []],
            'actor_key' => ['type' => 'foreign', 'columns' => ['actor_id'], 'references' => ['actors', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'films_actors_ibfk_1' => ['type' => 'foreign', 'columns' => ['film_id'], 'references' => ['films', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'film_id' => 1,
            'actor_id' => 1
        ],
    ];
}
