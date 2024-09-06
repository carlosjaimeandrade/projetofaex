<?php

require_once './vendor/autoload.php';

use Carlos\Scheduler\Routers\Loader;
// use Carlos\Scheduler\Models\Users\Users;

// $user = new Users();

// $data = [
//     'name' => "",
//     'email' => "carlo@example.com",
//     'phone' => "35998309568",
//     'password' => password_hash('12236565', PASSWORD_DEFAULT),
// ];

// $user->create($data);

$loader = new Loader();
$loader->execute();