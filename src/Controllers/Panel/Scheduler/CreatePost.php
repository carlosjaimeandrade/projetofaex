<?php
namespace Carlos\Scheduler\Controllers\Panel\Scheduler;

use Carlos\Scheduler\Models\Schedulers\Schedulers;
use Carlos\Scheduler\Helpers\Message\Message;

class CreatePost
{
    protected Schedulers $schedulers;

    protected Message $message;

    public function __construct() {
        $this->schedulers = new Schedulers();
        $this->message = new Message();
    }

    public function execute($data)
    {  
        //deve conter alem da criação a validação dos dados     
        $this->schedulers->create($data);
        $this->message->setMessageSuccess('Agendamento criado com sucesso');
        header('location: /panel/scheduler/');
    }
}