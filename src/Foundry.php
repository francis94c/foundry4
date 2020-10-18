<?php

namespace Francis94c\Foundry;

use CodeIgniter\Database\Forge;

class Foundry
{
    /**
     * [build description]
     * @date  2019-12-29
     * @param string     $table         [description]
     * @param callable   $buildCallable [description]
     */
    public static function create(string $table, callable $buildCallable, Forge $forge): void
    {
        $blueprint = new BluePrint(false);

        $buildCallable($blueprint);

        $blueprint->execute($table, $forge);
    }

    /**
     * [update description]
     * @date  2020-06-16
     * @method update
     * @param  string   $table          [description]
     * @param  callable $updateCallable [description]
     */
    public static function update(string $table, callable $updateCallable, Forge $forge): void
    {
        $blueprint = new BluePrint(true);

        $updateCallable($blueprint);

        $blueprint->execute($table, $forge);
    }

    /**
     * [drop description]
     * @date  2019-12-29
     * @param string     $table [description]
     */
    public static function drop(string $table, $forge): void
    {
        $forge->dropTable($table);
    }
}
