<?php

declare(strict_types=1);

// First we need to update how we handle the configuration and bootstrapping our application. We're going to use the examples directory as a starting point for the Pokédex. Create a new file called config.php. This file should simply return an array of configuration such as database credentials. Add driver, host, database, username and password to the array with your database credentials.

return [
    'driver' => $_ENV['DATABASE_DRIVER'],
    'host' => $_ENV['DATABASE_HOST'],
    'database' => $_ENV['DATABASE_NAME'],
    'username' => $_ENV['DATABASE_USER'],
    'password' => $_ENV['DATABASE_PASSWORD'],
];
