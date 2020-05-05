<?php

return [
    'environments' => [
        'default_database' => 'local',
        'local_sqlite' => [
            'adapter' => 'sqlite',
            'name' => __DIR__ . '/data/izmezzio.db',
            'charset' => 'utf8',
        ],
        'local' => [
            'adapter' => 'mysql',
            'name' => 'izmezzio',
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'israel93',
            'charset' => 'utf8',
        ],
    ],
];
