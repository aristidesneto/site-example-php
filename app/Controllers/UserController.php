<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::get();

        return view('users.user', [
            'users' => $users
        ]);
    }
}
