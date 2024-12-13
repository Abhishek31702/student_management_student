<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    /**
     * The default connection group that should be used.
     *
     * @var string
     */
    public $defaultGroup = 'default';

    /**
     * The default database connection settings.
     *
     * @var array
     */
    public $default = [
        'DSN'      => '',
        'hostname' => 'localhost',  // Change this if your database host is not localhost
        'username' => 'root',       // Update this to your MySQL username
        'password' => '',           // Update this to your MySQL password
        'database' => 'Student_Management_System', // Update to your database name
        'DBDriver' => 'MySQLi',     // Database driver
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => (ENVIRONMENT !== 'production'), // Enable debugging for non-production
        'cacheOn'  => false,
        'cacheDir' => '',
        'charset'  => 'utf8',       // Character set
        'DBCollat' => 'utf8_general_ci', // Collation
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,         // MySQL default port
    ];

    /**
     * This is used when running PHPUnit database tests.
     *
     * @var array
     */
    public $tests = [
        'DSN'      => '',
        'hostname' => '127.0.0.1',
        'username' => '',
        'password' => '',
        'database' => ':memory:',
        'DBDriver' => 'SQLite3',
        'DBPrefix' => 'test_',
        'pConnect' => false,
        'DBDebug'  => true,
        'cacheOn'  => false,
        'cacheDir' => '',
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
}
