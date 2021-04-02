<?php

use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;

$db = require(__DIR__ . '/../config/database.php');

$capsule->addConnection([
    'driver'    => $db['default']['driver'],
    'host'      => $db['default']['host'],
    'database'  => $db['default']['database'],
    'username'  => $db['default']['username'],
    'password'  => $db['default']['password'],
    'charset'   => $db['default']['charset'],
    'collation' => $db['default']['collation'],
    'prefix'    => $db['default']['prefix'],
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
