<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /*
    public function products()
    {
        // get products with raw sql
        // $products = DB::select('SELECT * FROM products');
        // dd($products);

        // with query builder
        // $products = DB::table('products')->get();
        // dd($products);

        // with query builder - return in array
        //$products = DB::table('products')->get()->toArray();
        // dd($products);
        // OU
        // echo '<pre></pre>';
        // print_r($products);

        // using Eloquent ORM - Using Model
        $model = new ProductModel();
        $products = $model->all();

        // dd($products);

        foreach ($products as $product) {
            echo $product->product_name . '<br>';
        }
    }

    public function view()
    {
        $data = [
            'title' => 'Título do página'
        ];

        return view('home', $data);
    }
    */
}
