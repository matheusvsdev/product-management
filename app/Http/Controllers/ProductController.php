<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function new_product()
    {
        $data = [
            'title' => 'Adicionar produto'
        ];

        return view('new_product_frm', $data);
    }

    public function new_product_submit(Request $request)
    {
        // form validation
        $request->validate([
            'text_product_name' => 'required|min:3|max:200',
            'text_product_description' => 'max:1000',
            'text_product_price' => 'required|numeric|min:0',
        ], [
            'text_product_name.required' => 'Campo obrigatório.',
            'text_product_name.min' => 'Campo deve ter no mínimo 3 caracteres.',
            'text_product_name.max' => 'Campo deve ter no máximo 200 caracteres.',

            'text_product_description.max' => 'Campo deve ter no máximo 1000 caracteres.',

            'text_product_price.required' => 'Campo obrigatório.',
            'text_product_price.numeric' => 'Campo deve conter números e não letras.',
            'text_product_price.min' => 'Preço mínimo R$ 0.00.',
        ]);

        // get form data
        $product_name = $request->input('text_product_name');
        $product_description = $request->input('text_product_description');
        $product_price = $request->input('text_product_price');

        // check if there is already another product with the same name
        $model = new ProductModel();
        $product = $model->where('product_name', '=', $product_name)
                         ->whereNull('deleted_at')
                         ->first();
        if($product) {
            return redirect()->route('new_product')->with('task_error', 'Já existe um produto com esse nome.');
        }

        // insert new product
        $model->product_name = $product_name;
        $model->product_description = $product_description;
        $model->product_price = $product_price;
        $model->created_at = date('Y-m-d H:i:s');

        $model->save();

        return redirect()->route('index');
    }
}
