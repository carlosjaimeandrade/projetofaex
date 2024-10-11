<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Users\UserSession;

class Logout
{
    protected Loader $template;

    protected UserSession $userSession;

    public function __construct() {
        $this->template = new Loader();
        $this->userSession = new UserSession();
    }

    public function execute()
    {   
        $this->userSession->destroy();
        header("Location: /login");
    }

}