<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Helpers;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$config = require 'config.php';

$database = new QueryBuilder(
    Connection::make($config['driver'], $config['host'], $config['database'], $config['username'], $config['password'])
);
