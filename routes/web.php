<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo 'Conexão efetuada com sucesso no Banco MYSQL: ' .DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('Não foi possível conectar com a base de dados. Erro:' .$e->getMessage());
    }
});

Route::get('/main', [ProductController::class, 'index']);
