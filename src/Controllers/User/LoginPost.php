<?php
namespace Carlos\Scheduler\Controllers\User;

use Carlos\Scheduler\Helpers\Message\Message;
use Carlos\Scheduler\Models\Users\Users;

class LoginPost
{
    protected Message $message;

    protected Users $users;

    public function __construct()
    {
        $this->users = new Users();
        $this->message = new Message();
    }
    public function execute($data)
    {
        echo "ola mundo";
    }
}