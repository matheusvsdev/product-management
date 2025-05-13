<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login_frm', $data);
    }

    public function login_submit()
    {
        echo 'Submissão do Login';
    }
}
