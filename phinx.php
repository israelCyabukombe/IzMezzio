<?php

require_once __DIR__ . '/vendor/autoload.php';

use laminas\Stdlib\ArrayUtils as ArrayUtils;

$config = [
        'paths' => [
                'migrations' => './data/phinx/migrations',
            'seeds' => './data/phinx/seeds',
        ],
];

if (file_exists(__DIR__ .'/phinx.local.php')) {
    $config = Laminas\Stdlib\ArrayUtils::merge(
        $config,
        include __DIR__ . '/phinx.local.php'
    );
}
return $config;
