<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Schedulers\Schedulers;

class Scheduler
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

        $this->template->render('panel/scheduler', true, [
            "schedulers" => $schedulers
        ]);
    }

}