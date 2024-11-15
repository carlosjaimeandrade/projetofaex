<?php
namespace Carlos\Scheduler\Controllers\LandingPage;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Schedulers\Schedulers;

class LandingPage
{
    private Loader $template;

    private Schedulers $schedulers;

    public function __construct() {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }

    public function execute()
    {
        $schedulers = $this->schedulers->findAll([],"*", 6);

        $this->template->render("ladingPage/ladingPage", false, [
            "schedulers" => $schedulers
        ]);
    }
}