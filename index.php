<?php

require_once './vendor/autoload.php';

use Carlos\Scheduler\Routers\Loader;

$loader = new Loader();
$loader->execute();