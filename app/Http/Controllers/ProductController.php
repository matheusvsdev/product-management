<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $date = [
            'title' => 'Olá Laravel!',
            'description' => 'Projeto Laravel!'
        ];
        return view('main', $date);
    }
}
