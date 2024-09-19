<?php

require_once './vendor/autoload.php';

session_start();

use Carlos\Scheduler\Routers\Loader;
// use Carlos\Scheduler\Models\Users\Users;

// $user = new Users();

// $data = $user->findAll();

// var_dump($data);

$loader = new Loader();
$loader->execute();