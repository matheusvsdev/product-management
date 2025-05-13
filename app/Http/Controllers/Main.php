<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function main()
    {
        $data = [
            'title' => 'Main'
        ];

        return view('main', $data);
    }
}
