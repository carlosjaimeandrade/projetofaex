<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;

class Scheduler
{
    protected Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        $this->template->render('panel/scheduler', true);
    }

}