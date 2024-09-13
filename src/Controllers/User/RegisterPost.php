<?php

namespace Carlos\Scheduler\Controllers\User;

use Carlos\Scheduler\Models\Users\Users;
use Carlos\Scheduler\Controllers\User\Services\Register\Validate;
use Carlos\Scheduler\Helpers\Message\Message;

class RegisterPost
{
    protected Users $users;

    protected Validate $validate;

    protected Message $message;

    public function __construct()
    {
        $this->users = new Users();
        $this->validate = new Validate();
        $this->message = new Message();
    }

    public function execute($data)
    {
        if (!$this->validate->execute($data)){
            header('location: /register');
            return;
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        $this->message->setMessageSuccess("Registrado com sucesso");
        $this->message->setMessageError(message: "asopdkaopkdopsa");
       
        header('location: /login');
        return;
    }
}