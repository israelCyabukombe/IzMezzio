<?php

declare(strict_types=1);

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Doctrin cli command setup
 */

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$container = require 'config/container.php';

$entityManager = $container->get(EntityManagerInterface::class);

return ConsoleRunner::createHelperSet($entityManager);
