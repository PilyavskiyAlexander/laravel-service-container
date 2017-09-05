<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserInterface $user)
    {
        return dd($user->getUser(1));
    }
}
