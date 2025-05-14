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
            'datatables' => true,
            'products' => $this->_get_tasks()
        ];

        return view('main', $data);
    }

    private function _get_tasks()
    {
        $model = new ProductModel();

        $products = $model->whereNull('deleted_at')
                     ->get();

        $collection = [];
        foreach($products as $product) {

            $link_edit = '<a href="' . route('edit_product', ['id' => $product->id]). '" class="btn btn-secondary m-1"><i class="bi bi-pencil-square"></i></a>';
            $link_delete = '<a href="' . route('delete_product', ['id' => $product->id]). '" class="btn btn-secondary m-1"><i class="bi bi-trash"></i></a>';

            $collection[] = [
                'product_name' => $product->product_name,
                'product_description' => $product->product_description,
                'product_price' => $product->product_price,
                'product_actions' => $link_edit . $link_delete
            ];
        }

        return $collection;
    }
}
