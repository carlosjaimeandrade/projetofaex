<?php

namespace Carlos\Scheduler\Controllers\User;

use Carlos\Scheduler\Models\Users\Users;
use Carlos\Scheduler\Controllers\User\Services\Register\Validate;

class RegisterPost
{
    protected Users $users;

    protected Validate $validate;

    public function __construct()
    {
        $this->users = new Users();
        $this->validate = new Validate();
    }

    public function execute($data)
    {
        if (!$this->validate->execute($data)){
            header('location: /register');
            return;
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->users->create($data);

        header('location: /login');
        return;
    }
}