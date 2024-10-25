<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Helpers\Template\Loader;
use Carlos\Scheduler\Models\Schedulers\Schedulers;
use Carlos\Scheduler\Helpers\Message\Message;

class Delete
{
    protected Loader $template;

    protected Schedulers $schedulers;

    protected Message $message;

    public function __construct() {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
        $this->message = new Message();
    }

    public function execute($data)
    {   
        if($this->schedulers->delete($data['id'])) {
            $this->message->setMessageSuccess('Deleted successfully');
            header('Location: /panel/scheduler/');
            return;
        }

        $this->message->setMessageSuccess('Não foi possivel deletar');

        header('Location: /panel/scheduler/');

    }

}