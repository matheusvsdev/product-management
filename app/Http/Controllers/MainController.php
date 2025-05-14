<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gerenciador de Produtos',
            'products' => $this->_get_tasks()
        ];

        return view('main', $data);
    }

    private function _get_tasks()
    {
        $model = new ProductModel();
        return $model->whereNull('deleted_at')
                     ->get();
    }
}
