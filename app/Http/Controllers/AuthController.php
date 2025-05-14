<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login_frm', $data);
    }

    public function login_submit(Request $request)
    {
        // form validation
        $request->validate([
            'text_username' => 'required|min:3',
            'text_password' => 'required|min:3',
        ], [
            'text_username.required' => 'Campo obrigatório.',
            'text_username.min' => 'Campo deve ter no mínimo 3 caracteres.',
            'text_password.required' => 'Campo obrigatório.',
            'text_password.min' => 'Campo deve ter no mínimo 3 caracteres.',
        ]);

        // get form data
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        // check if user exists
        $model = new UserModel();
        $user = $model->where('username', "=", $username)
                      ->whereNull('deleted_at')
                      ->first();
        if ($user) {
            // check if password is correct
            if (password_verify($password, $user->password)) {
                $session_data = [
                    'id' => $user->id,
                    'username' => $user->username
                ];
                session()->put($session_data);
                return redirect()->route('index');
            }
        }

        // invalid login
        return redirect()->route('login')
                         ->withInput()
                         ->with('login_error', 'Login inválido');
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
