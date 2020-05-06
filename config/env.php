<?php

declare(strict_types=1);

$config = require __DIR__ . '/config.php';

if (!defined('MIN_TIMESTAMP')) {
    define('MIN_TIMESTAMP', $config['db']['minTimestamp']);
}

if (!defined('MAX_TIMESTAMP')) {
    define('MAX_TIMESTAMP', $config['db']['maxTimestamp']);
}
