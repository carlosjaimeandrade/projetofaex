<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Schedulers\Schedulers;

class Edit
{
    protected Loader $template;

    protected Schedulers $schedulers;

    public function __construct() {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }

    public function execute($data)
    {   
        $scheduler = $this->schedulers->findOne([
            'id' => $data['id']
        ]);

        $this->template->render('panel/schedulerEdit', true, [
            'scheduler' => $scheduler
        ]);
    }

}