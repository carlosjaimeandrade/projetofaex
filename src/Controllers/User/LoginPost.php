<?php
namespace Carlos\Scheduler\Controllers\User;

use Carlos\Scheduler\Helpers\Message\Message;
use Carlos\Scheduler\Models\Users\Users;
use Carlos\Scheduler\Models\Users\UserSession;

class LoginPost
{
    protected Message $message;

    protected Users $users;

    protected UserSession $userSession;

    public function __construct()
    {
        $this->users = new Users();
        $this->message = new Message();
        $this->userSession = new UserSession();
    }
    public function execute($data)
    {
        $success = true;
        if (!isset($data['email']) || !isset($data['password'])){
            $success = false;
            $this->message->setMessageError("Você precisa preencher todos os campos");
        }

        if (empty($data['email']) || empty($data['password']))
        {
            $success = false;
            $this->message->setMessageError("Os campos devem conter valores preenchido");
        }

        if(!$success) {
            header('location: /login');
            return;
        }

        $user = $this->users->findOne([
            "email" => $data['email']
        ]);

        if(!$user) {
            $this->message->setMessageError("Usuário não encontrado");
            header('location: /login');
            return;
        }
        
        if(!password_verify($data['password'], $user['password'])) {
            $this->message->setMessageError("Usuario ou senha invalidos");
            header('location: /login');
            return;
        }
        
        $this->userSession->create($user['id'], $user['name'], $user['email']);

        header('location: /panel/scheduler/');
    }
}