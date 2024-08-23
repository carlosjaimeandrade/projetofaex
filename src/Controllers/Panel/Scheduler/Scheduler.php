<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;

class Scheduler
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "Listagem de agendamentos";
    }

}