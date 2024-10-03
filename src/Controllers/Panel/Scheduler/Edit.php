<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;

class Edit
{
    protected Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        $this->template->render('panel/schedulerCreate', true);
    }

}