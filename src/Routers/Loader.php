<?php

namespace Carlos\Scheduler\Routers;

use CoffeeCode\Router\Router;
use Carlos\Scheduler\Routers\User\UserRouters;
use Carlos\Scheduler\Routers\Panel\Scheduler\SchedulerRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private SchedulerRouters $schedulerRouter;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->schedulerRouter = new SchedulerRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->schedulerRouter->execute();
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
