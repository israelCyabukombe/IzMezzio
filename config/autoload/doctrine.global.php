<?php

declare(strict_types=1);

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driver_class' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'dbname' => 'izmezzio',
                    'user' => 'root',
                    'password' => 'israel93',
                ],
            ],
        ],
        'driver' => [
            'app_entity' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'paths' => [__DIR__ . '/../../src/App/src/model'],
                'cache' => 'filesystem',
            ],
            'orm_default' => [
                'class' => \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain::class,
                'drivers' => [
                    'App\Model' => 'app_entity',
                ],
            ],
        ],
    ]
];
