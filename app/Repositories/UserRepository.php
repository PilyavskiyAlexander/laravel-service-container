<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\User;

class UserRepository extends User implements UserInterface
{
    protected $table = 'users';

    public function getUser(int $id) :UserInterface
    {
        return $this->find($id);
    }

    public function setUser(int $id, string $value) :bool
    {
        return true;
    }
}