<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Schedulers\Schedulers;

class ApiScheduler
{
    protected Loader $template;

    protected Schedulers $schedulers;

    public function __construct() {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }

    public function execute()
    {   
        $schedulers = $this->schedulers->findAll();

        
        echo json_encode($schedulers);
    }

}