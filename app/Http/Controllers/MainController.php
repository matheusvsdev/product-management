<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gerenciador de Produtos'
        ];

        return view('main', $data);
    }
}
