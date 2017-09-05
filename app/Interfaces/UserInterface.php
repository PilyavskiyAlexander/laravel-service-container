<?php

namespace App\Interfaces;

interface UserInterface
{
    public function getUser(int $id);

    public function setUser(int $id, string $value);
}