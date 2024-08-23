<?php

namespace Carlos\Scheduler\Routers\Panel\Scheduler;

use CoffeeCode\Router\Router;

class SchedulerRouters
{
    private Router $router;

    public function __construct(Router $router) 
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Carlos\Scheduler\Controllers\Panel\Scheduler');

        $this->router->get("/panel/scheduler/", 'Scheduler:execute');

        $this->router->get("/panel/scheduler/create", 'Create:execute');
    }

}