<?php

use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;

$db = require(__DIR__ . '/../config/database.php');

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $db['default']['host'],
    'database'  => $db['default']['database'],
    'username'  => $db['default']['username'],
    'password'  => $db['default']['password'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
