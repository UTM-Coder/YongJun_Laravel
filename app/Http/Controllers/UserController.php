<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = [
            ['name' => 'Yong Jun', 'age' => 23],
            ['name' => 'Choo', 'age' => 11],
            ['name' => 'Sunny', 'age' => 8],
            ['name' => 'Ki Hong', 'age' => 21],
        ];

    public function index()
    {
        $users = $this->users;
        return view('user_index', compact('users'));
    }

    public function get($id)
    {
        $user = $this->users[$id];
        return view('user', compact('user'));
    }

}